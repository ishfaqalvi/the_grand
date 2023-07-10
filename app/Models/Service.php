<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $branch_id
 * @property $image
 * @property $heading
 * @property $sub_heading
 * @property $button
 * @property $description
 * @property $order
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Branch $branch
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'branch_id' => 'required',
		'image' => 'required',
		'heading' => 'required',
		'sub_heading' => 'required',
		'button' => 'required',
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
    protected $fillable = ['branch_id','image','heading','sub_heading','button','description','order','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }
    

}
