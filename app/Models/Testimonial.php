<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

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
		'branch_id'=> 'required',
        'name'     => 'required',
        'stars'    => 'required',
        'auther'   => 'required',
		'message'  => 'required',
		'order'    => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id','name','stars','auther','image','message','order','status'];

    /**
     * Set the image attribute.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function setImageAttribute($image)
    {
        if ($image) {
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filenametostore = 'upload/images/testimonial/'.time().'.webp';
            $img = Image::make($image)->encode('webp', 90)->resize(70,70);   
            $img->save(public_path($filenametostore));
            $this->attributes['image'] = $filenametostore;
        }else{
            unset($this->attributes['image']);
        }
    }

    /**
     * Testimonial scope a query
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
