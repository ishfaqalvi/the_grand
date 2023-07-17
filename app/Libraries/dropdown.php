<?php

use App\Models\Branch;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\DynamicString;

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function branches()
{
    return Branch::pluck('name','id');
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function menuParents()
{
	if (auth()->user()->type == 'Branch') {
    	$menus = Menu::where([['type','Header'],['branch_id',auth()->user()->branch_id]])->whereNull('parent_id')->pluck('title','id');
    }else{
    	$menus = Menu::where('type','Header')->whereNull('parent_id')->pluck('title','id');
    }
    return $menus;
}