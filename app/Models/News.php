<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 *
 * @property $id
 * @property $branch_id
 * @property $heading
 * @property $sub_heading
 * @property $image
 * @property $date
 * @property $url
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
class News extends Model
{
    
    static $rules = [
		'branch_id' => 'required',
		'heading' => 'required',
		'sub_heading' => 'required',
		'image' => 'required',
		'date' => 'required',
		'url' => 'required',
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
    protected $fillable = ['branch_id','heading','sub_heading','image','date','url','description','order','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }
    

}
