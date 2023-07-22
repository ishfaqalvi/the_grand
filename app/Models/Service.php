<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

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
		'page_id'     => 'required',
        'heading'     => 'required',
		'sub_heading' => 'required',
		'link'        => 'required',
        'button_title'=> 'required',
		'description' => 'required',
		'order'       => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['page_id','image','heading','sub_heading','link','button_title','description','order','status'];

    /**
     * Service scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeUserBased($query)
    {
        if (auth()->user()->type == 'Branch') {
            $ids = auth()->user()->branch->pages()->where('template','Home')->pluck('id');
            $query->whereIn('page_id', $ids);
        }
    }

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
            $filenametostore = 'upload/images/services/'.time().'.webp';
            $img = Image::make($image)->encode('webp', 90)->resize(570,380);   
            $img->save(public_path($filenametostore));
            $this->attributes['image'] = $filenametostore;
        }else{
            unset($this->attributes['image']);
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function page()
    {
        return $this->hasOne('App\Models\Page', 'id', 'page_id');
    }
}
