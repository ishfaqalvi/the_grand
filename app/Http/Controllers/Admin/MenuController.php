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
    public function index_header(Request $request)
    {
        $menus = Menu::filter($request->all())->userBased()->header()->whereNull('parent_id')->orderBy('order', 'asc')->get();
        $filters = getFilter(Menu::userBased()->header()->whereNull('parent_id')->get(), ['branch_id']);
        $request->method() == 'POST' ? $userRequest = $request : $userRequest = null;

        return view('admin.menu.header.index', compact('menus','filters','userRequest'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_footer(Request $request)
    {
        $menus = Menu::filter($request->all())->userBased()->footer()->orderBy('order', 'asc')->get();
        $filters = getFilter(Menu::userBased()->footer()->get(), ['branch_id']);
        $request->method() == 'POST' ? $userRequest = $request : $userRequest = null;

        return view('admin.menu.footer.index', compact('menus','filters','userRequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_header()
    {
        $menu = new Menu();
        return view('admin.menu.header.create', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_footer()
    {
        $menu = new Menu();
        return view('admin.menu.footer.create', compact('menu'));
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
        if ($menu->type == 'Header') {
            if ($menu->parent_id != Null)
            {
                return redirect()->back()->with('success', 'Menu child created successfully.');
            }
            else{
                return redirect()->route('menus.header.index')->with('success', 'Header Menu created successfully.');
            }
        }
        else{
            return redirect()->route('menus.footer.index')
            ->with('success', 'Footer Menu created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show_header($id)
    {
        $menu = Menu::find($id);

        return view('admin.menu.header.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_header($id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.header.edit', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_footer($id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.footer.edit', compact('menu'));
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
        if ($menu->type == 'Header') {
            if ($menu->parent_id != Null)
            {
                return redirect()->back()->with('success', 'Menu child updated successfully.');
            }
            else{
                return redirect()->route('menus.header.index')->with('success', 'Header Menu updated successfully.');
            }
        }
        else{
            return redirect()->route('menus.footer.index')
            ->with('success', 'Footer Menu updated successfully.');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if ($menu->parent_id != '') {
            $menu->delete();
            return redirect()->back()->with('success', 'Menu deleted successfully');
        }
        if(count($menu->childItems) < 1){
            $menu->delete();
            return redirect()->back()->with('success', 'Menu deleted successfully');
        }else{
            return redirect()->back()->with('warning', 'Sorry! Menu Item child exists.');
        } 
    }
}