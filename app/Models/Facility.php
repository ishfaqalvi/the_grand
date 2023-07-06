<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facility
 *
 * @property $id
 * @property $icon
 * @property $heading
 * @property $description
 * @property $order
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facility extends Model
{
    
    static $rules = [
		'icon' => 'required',
		'heading' => 'required',
		'description' => 'required',
		'order' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['icon','heading','description','order','status'];



}
