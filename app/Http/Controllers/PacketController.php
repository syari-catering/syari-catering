<?php

namespace App\Http\Controllers;

use App\Packet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PacketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packets = Packet::get();

        return view('admin.packet.index', [
            'packets' => $packets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $packets = Packet::get();

        return view('admin.packet.create', [
            'packets' => $packets,
        ]);
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
            'name'    => 'required|min:5',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $packet = new packet;
        $packet->name = $request->name;
        $packet->save();

        return redirect()->route('admin.packet.index')->with('success', 'Data Berhasil Ditambah');
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
    public function edit(Packet $packet)
    {
        //policies otomatis
        // $this->authorize('update', $packet);

        return view('admin.packet.edit', [
            'packet' => $packet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packet $packet)
    {
        $this->validate($request, [
            'name'    => 'required|min:5',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $packet->name         = $request->name;
        $packet->save();

        return redirect()->route('admin.packet.index')->with('warning', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packet $packet)
    {
        // $this->authorize('destroy', $packet);

        $packet->delete();
        return redirect()->route('admin.packet.index')->with('danger', 'Data Berhasil Dihapus');
    }
}
