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
    protected $fillable = ['branch_id','heading','sub_heading','image','date','url','description','order','status'];

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
            $img = Image::make($image)->encode('webp', 90);   
            $img->save(public_path($filenametostore));
            $this->attributes['image'] = $filenametostore;
        }else{
            unset($this->attributes['image']);
        }
    }

    /**
     * News scope a query
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
