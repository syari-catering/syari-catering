<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
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
        $menus = Menu::get();

        return view('admin.menu.index', [
            'menus' => $menus
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

        return view('admin.menu.create', [
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
            'name'    => 'required|min:5',
            'price'   => 'required|min:3',
            'detail'  => 'required|min:10',
            'image'   => 'image',
        ], [
            'required' => ':attribute Harus diisi',
        ]);

        $imagePath = $request->file('image')->store('menu');

        $menu = new Menu;
        $menu->name         = $request->name;
        $menu->price        = $request->price;
        $menu->detail       = $request->detail;
        $menu->image        = $imagePath;
        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Data Berhasil Ditambah');
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
    public function edit(Menu $menu)
    {
        //policies otomatis
        // $this->authorize('update', $menu);

        return view('admin.menu.edit', [
            'menu' => $menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $this->validate($request, [
            'name'    => 'required|min:5',
            'price'   => 'required|min:3',
            'detail'  => 'required|min:10',
            'image'   => 'image',
        ], [
            'required' => ':attribute Harus diisi'
        ]);

        $menu->name         = $request->name;
        $menu->price        = $request->price;
        $menu->detail       = $request->detail;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('menu');
            Storage::delete($menu->image);
            $menu->image = $imagePath;
        }

        $menu->save();

        return redirect()->route('admin.menu.index')->with('warning', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        // $this->authorize('destroy', $menu);

        $menu->delete();

        Storage::delete($menu->image);

        return redirect()->route('admin.menu.index')->with('danger', 'Data Berhasil Dihapus');
    }
}
