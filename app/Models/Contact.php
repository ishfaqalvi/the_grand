<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $number
 * @property $subject
 * @property $description
 * @property $order
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contact extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'number' => 'required',
		'subject' => 'required',
		'description' => 'required',
		'order' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','number','subject','description','order','status'];



}
