<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

/**
 * Class MenuController
 * @package App\Http\Controllers
 */
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::userBased()->get();

        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu       = new Menu();
        $parents    = Menu::where('type','Main')->whereNull('parent_id')->pluck('title','id');
        return view('admin.menu.create', compact('menu','parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Menu::$rules);

        $menu = Menu::create($request->all());

        return redirect()->route('menus.index')
            ->with('success', 'Menu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);

        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu      = Menu::find($id);
        $parents   = Menu::where('type','Main')->whereNull('parent_id')->pluck('title','id');

        return view('admin.menu.edit', compact('menu','parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        request()->validate(Menu::$rules);

        $menu->update($request->all());

        return redirect()->route('menus.index')
            ->with('success', 'Menu updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if(count($menu->childItems) < 1){
            $menu->delete();
            return redirect()->route('menus.index')
            ->with('success', 'Menu deleted successfully');
        }else{
            return redirect()->route('menus.index')
            ->with('warning', 'Sorry! Menu Item child exists.');
        } 
    }
}
