<?php

namespace App\Http\Controllers;

use App\MenuSchedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Menu;

class MenuScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuschedules = MenuSchedule::orderby('date','asc')->get();

        return view('admin.menuschedule.index', [
            'menuschedules' => $menuschedules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::get();

        return view('admin.menuschedule.create', [
            'menus' => $menus,
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
            'menu'    => 'required',
            'date'   => 'required',
        ], [
            'required' => ':attribute Harus diisi'
        ]);



        $menuschedule = new Menuschedule;
        $menuschedule->date = $request->date;
        $menuschedule->menu_id = $request->menu;

        $menuschedule->save();

        return redirect()->route('admin.menuschedule.index')->with('success', 'Data Berhasil Ditambah');
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
    public function edit(MenuSchedule $menuschedule)
    {
        //policies otomatis
        // $this->authorize('update', $menu);        

        $menus = Menu::get();

        return view('admin.menuschedule.edit', [
            'menuschedule' => $menuschedule,
            'menus' => $menus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuSchedule $menuschedule)
    {
        $this->validate($request, [
            'menu'    => 'required',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $menuschedule->menu_id = $request->menu;
        $menuschedule->save();

        return redirect()->route('admin.menuschedule.index')->with('warning', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuSchedule $menuschedule)
    {
        // $this->authorize('destroy', $menu);

        $menuschedule->delete();

        return redirect()->route('admin.menuschedule.index')->with('danger', 'Data Berhasil Dihapus');
    }
}
