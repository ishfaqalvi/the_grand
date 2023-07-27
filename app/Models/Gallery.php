<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Image;

/**
 * Class Gallery
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gallery extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id','category_id','type','image','video_thumbnail','video_link'];

    /**
     * Set the image attribute.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function setImageAttribute($image)
    {
        if ($image) {
            $name = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/upload/images/gallery/images/');

            $img = Image::make($image->path());

            // save original
            $img->save($destinationPath.'original/'.$name);

            // save resized version 1
            $img->resize(300, 185)->save($destinationPath.'small/'.$name);

            // save resized version 2
            $img->resize(450, 280)->save($destinationPath.'medium/'.$name);

            // save resized version 3
            $img->resize(295, 390)->save($destinationPath.'large/'.$name);

            $this->attributes['image'] = $name;
        }else {
            unset($this->attributes['image']);
        }
    }

    /**
     * Set the image attribute.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function setVideoThumbnailAttribute($thumbnail)
    {
        if ($thumbnail) {
            $name = time().'.'.$thumbnail->getClientOriginalExtension();

            $destinationPath = public_path('/upload/images/gallery/thumbnail/');

            $img = Image::make($thumbnail->path());

            // save original
            $img->save($destinationPath.'original/'.$name);

            // save resized version 1
            $img->resize(292, 182)->save($destinationPath.'small/'.$name);

            // save resized version 2
            $img->resize(450, 280)->save($destinationPath.'medium/'.$name);

            $this->attributes['video_thumbnail'] = $name;
        }else{
            unset($this->attributes['video_thumbnail']);
        }
    }

    /**
     * Gallery scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeUserBasedImage($query)
    {
        if (auth()->user()->type == 'Branch') {
            $query->where([['branch_id', auth()->user()->branch_id],['type','Image']]);
        }else{
        	$query->where('type','Image');
        }
    }

    /**
     * Gallery scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeUserBasedVideo($query)
    {
        if (auth()->user()->type == 'Branch') {
            $query->where([['branch_id', auth()->user()->branch_id],['type','Video']]);
        }else{
        	$query->where('type','Video');
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
