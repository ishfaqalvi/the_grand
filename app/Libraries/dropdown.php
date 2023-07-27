<?php

use App\Models\Branch;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Category;

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

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function homePages()
{
	if (auth()->user()->type == 'Branch') {
    	$pages = Page::where([['template','Home'],['branch_id',auth()->user()->branch_id]])->pluck('title','id');
    }else{
    	$pages = Page::where('template','Home')->pluck('title','id');
    }
    return $pages;
}

/**
 * Get listing of a resource.
 *
 * @return \Illuminate\Http\Response
 */
function categories($id =null)
{
    if ($id) {
        $categories = Category::where([['branch_id',$id],['status','Publish']])->pluck('title','id');
    }else{
        $categories = Category::where('status','Publish')->pluck('title','id');
    }
    return $categories;
}