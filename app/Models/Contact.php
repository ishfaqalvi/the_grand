<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @property $id
 * @property $branch_id
 * @property $name
 * @property $email
 * @property $number
 * @property $subject
 * @property $message
 * @property $created_at
 * @property $updated_at
 *
 * @property Branch $branch
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contact extends Model
{
    
    static $rules = [
		'branch_id' => 'required',
		'name'      => 'required',
		'email'     => 'required',
		'number'    => 'required',
		'subject'   => 'required',
		'message'   => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id','name','email','number','subject','message'];

    /**
     * Slider scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeUserBased($query)
    {
        if (auth()->user()->type == 'Branch') {
            $query->where('branch_id', auth()->user()->branch_id);
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }
}
