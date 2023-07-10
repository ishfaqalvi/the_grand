<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Testimonial
 *
 * @property $id
 * @property $branch_id
 * @property $name
 * @property $image
 * @property $message
 * @property $order
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Branch $branch
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Testimonial extends Model
{
    
    static $rules = [
		'branch_id' => 'required',
		'name' => 'required',
		'image' => 'required',
		'message' => 'required',
		'order' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id','name','image','message','order','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }
    

}
