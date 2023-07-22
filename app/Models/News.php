<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

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
		'page_id'     => 'required',
        'heading'     => 'required',
		'sub_heading' => 'required',
		'date'        => 'required',
		'url'         => 'required',
		'description' => 'required',
		'order'       => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['page_id','heading','sub_heading','image','date','url','description','order','status'];

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
            $filenametostore = 'upload/images/news/'.time().'.webp';
            $img = Image::make($image)->encode('webp', 90)->resize(352,469);   
            $img->save(public_path($filenametostore));
            $this->attributes['image'] = $filenametostore;
        }else{
            unset($this->attributes['image']);
        }
    }

    // public function getDateAttribute($value)
    // {
        
    // }

    /**
     * News scope a query
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function page()
    {
        return $this->hasOne('App\Models\Page', 'id', 'page_id');
    }
}
