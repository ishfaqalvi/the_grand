<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

/**
 * Class Category
 *
 * @property $id
 * @property $page_id
 * @property $title
 * @property $image
 * @property $link
 * @property $label
 * @property $order
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Page $page
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'branch_id' => 'required',
		'title' => 'required',
		'link' => 'required',
		'label' => 'required',
		'order' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id','title','image','link','link_title','label','order','status'];

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
            $name = 'upload/images/category/'.time().$image->getClientOriginalName();
            $img = Image::make($image)->resize(570,380);   
            $img->save(public_path($name));
            $this->attributes['image'] = $name;
        }else{
            unset($this->attributes['image']);
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
