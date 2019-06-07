<?php

namespace App\Http\Controllers;

use App\PacketRule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Packet;

class PacketRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packetrules = PacketRule::get();

        return view('admin.packetrule.index', [
            'packetrules' => $packetrules
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
        return view('admin.packetrule.create', [
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
            'packet'    => 'required',
            'description' => 'required',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $packetrule = new PacketRule;
        $packetrule->packet_id = $request->packet;
        $packetrule->description = $request->description;

        $packetrule->save();

        return redirect()->route('admin.packetrule.index')->with('success', 'Data Berhasil Ditambah');
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
    public function edit(PacketRule $packetrule)
    {
        //policies otomatis
        // $this->authorize('update', $packet);
        $packets = Packet::get();
        return view('admin.packetrule.edit', [
            'packetrule' => $packetrule,
            'packets' => $packets,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PacketRule $packetrule)
    {

        $this->validate($request, [
            'packet'    => 'required',
            'description' => 'required',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $packetrule->description = $request->description;
        $packetrule->packet_id = $request->packet;
        $packetrule->save();

        return redirect()->route('admin.packetrule.index')->with('warning', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PacketRule $packetrule)
    {
        // $this->authorize('destroy', $packet);

        $packetrule->delete();
        return redirect()->route('admin.packetrule.index')->with('danger', 'Data Berhasil Dihapus');
    }
}
