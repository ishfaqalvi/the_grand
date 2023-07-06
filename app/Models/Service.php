<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $image
 * @property $heading
 * @property $sub_heading
 * @property $description
 * @property $button
 * @property $order
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'heading' => 'required',
		'sub_heading' => 'required',
		'description' => 'required',
		'button' => 'required',
		'order' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['image','heading','sub_heading','description','button','order','status'];

}
