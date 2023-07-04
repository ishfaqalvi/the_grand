<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Slider
 *
 * @property $id
 * @property $title
 * @property $image
 * @property $linktype
 * @property $link
 * @property $order
 * @property $status
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Slider extends Model
{
    
    static $rules = [
		'title' => 'required',
		'image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','image','linktype','link','order','status','description'];



}
