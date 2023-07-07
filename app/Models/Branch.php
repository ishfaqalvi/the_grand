<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Branch
 *
 * @property $id
 * @property $name
 * @property $prefix
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Branch extends Model
{
    
    static $rules = [
		'name' => 'required',
		'prefix' => 'required',
		'image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','prefix','image'];



}
