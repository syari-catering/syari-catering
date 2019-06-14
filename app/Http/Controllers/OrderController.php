<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\MenuSchedule;
use App\Menu;
use App\OrderDetail;
use App\Packet;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if($packet=='keluarga') {
        //     return view('order backend/keluarga/index', [
        //         'menuschedules' => $menuSchedules,
        //         'menus' => $menus
        //     ]);
        // } else if ($packet=='acara') {
        //     return view('order backend/acara/index',[
        //         'menuSchedules' => $menuSchedules
        //     ]);
        // } else if ($packet=='instansi') {
        //     return view('order backend/instansi/index',[
        //         'menuSchedules' => $menuSchedules
        //     ]);
        // }
    }

    public function keluarga()
    {
        $menus = Menu::get();
        $menuSchedules = MenuSchedule::Orderby('date','asc')->get();
        
        return view('order backend/keluarga/index', [
            'menuschedules' => $menuSchedules,
            'menus' => $menus
        ]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($packet)
    {
        if($packet=='keluarga') {
            return view('order backend/keluarga/index');
        } else if ($packet=='acara') {
            return view('order backend/acara/index');
        } else if ($packet=='instansi') {
            return view('order backend/instansi/index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'ok';
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
