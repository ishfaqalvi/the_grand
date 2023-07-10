<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facility
 *
 * @property $id
 * @property $branch_id
 * @property $icon
 * @property $title
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
class Facility extends Model
{
    
    static $rules = [
		'branch_id' => 'required',
		'icon' => 'required',
		'title' => 'required',
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
    protected $fillable = ['branch_id','icon','title','description','order','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }
    

}
