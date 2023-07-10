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