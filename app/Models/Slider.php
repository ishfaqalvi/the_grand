<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

/**
 * Class Slider
 *
 * @property $id
 * @property $branch_id
 * @property $type
 * @property $title
 * @property $sub_title
 * @property $image
 * @property $video
 * @property $linktype
 * @property $link
 * @property $order
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Branch $branch
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Slider extends Model
{
    
    static $rules = [
		'type'      => 'required',
		'title'     => 'required',
		'sub_title' => 'required',
		'linktype'  => 'required',
		'link'      => 'required',
		'order'     => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'branch_id',
        'type',
        'title',
        'sub_title',
        'image',
        'video',
        'linktype',
        'link',
        'order',
        'status'
    ];

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
            $filenametostore = 'upload/images/sliders/'.time().'.webp';
            $img = Image::make($image)->encode('webp', 90);   
            $img->save(public_path($filenametostore));
            $this->attributes['image'] = $filenametostore;
        }else{
            unset($this->attributes['image']);
        }
    }

    /**
     * Set the image attribute.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function setVideoAttribute($video)
    {
        if ($video) {
            $name = time().'_'.$video->getClientOriginalName();
            $video->move('upload/vedios/sliders',$name);
            $this->attributes['video'] = 'upload/vedios/sliders/'.$name;
        }else{
            unset($this->attributes['video']);
        }
    }

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
