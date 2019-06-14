<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Order;
use App\OrderDetail;

class OrderKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'telp'   => 'required',
            'email'   => 'required',
            'address'   => 'required',
            'portion'   => 'required',
            'price'   => 'required',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $order = new Order;

        $lastId = Order::insertGetId(
            [
                'invoice_code'=>now(),
                'customer_name'=>$request->name,
                'address'=>$request->address,
                'phone'=>$request->telp,
                'email'=>$request->email,
                'date_ordered'=>now(),
                'total_cost'=>$request->price,
                'status'=>"Not Verified",
            ]
        );


        $date_start = $request->startFrom;
        $date_end = $request->stopedAtHide;
        $date1 = new DateTime($date_start);
        $date2 = new DateTime($date_end);
        $interval = $date1->diff($date2);
        $days = $interval->format('%a');

        $day1 = date('d',strtotime($date_start));
        $day2 = date('d',strtotime($date_end));
        $i = 1;
        for ($day1; $day1 <= $day2 ; $day1++) { 
            $allDays[$i] = $day1;
            $i++;
        }

        for ($i=1; $i <= $days; $i++) { 
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $lastId;
            $orderDetail->schedule_id = $allDays[$i];
            $orderDetail->delivered_on = $request->deliveryTime;
            $orderDetail->qty = $request->portion;
            $orderDetail->save();
        }

        return redirect()->route('order.keluarga')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
