<?php

namespace App\Models;

use App\EloquentFilters\BranchId;
use App\EloquentFilters\CategoryId;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;
use Image;
use claviska\SimpleImage;

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
    use Filterable;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id','category_id','type','image','video_thumbnail','video_link','order'];

    protected $filters = [
        BranchId::class,
        CategoryId::class
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
            $extension = $image->getClientOriginalExtension();
            $name = uniqid().".".$extension;

            $destinationPath = public_path('/upload/images/gallery/images/');

            // save original
            Image::make($image->path())->save($destinationPath.'original/'.$name);

            // save resized version 1
            $smallImage = new SimpleImage();
            $smallImage->fromFile($image)->resize(300,185)->toFile($destinationPath.'small/'.$name, 'image/jpeg');

            // save resized version 2
            $mediumImage = new SimpleImage();
            $mediumImage->fromFile($image)->resize(450, 280)->toFile($destinationPath.'medium/'.$name, 'image/jpeg');

            // save resized version 3
            $largeImage = new SimpleImage();
            $largeImage->fromFile($image)->resize(295, 390)->toFile($destinationPath.'large/'.$name, 'image/jpeg');

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
    public function setVideoThumbnailAttribute($image)
    {
        if ($image) {
            $extension = $image->getClientOriginalExtension();
            $name = uniqid().".".$extension;

            $destinationPath = public_path('/upload/images/gallery/thumbnail/');

            // save original
            Image::make($image->path())->save($destinationPath.'original/'.$name);

            // save resized version 1
            $smallImage = new SimpleImage();
            $smallImage->fromFile($image)->resize(292, 185)->toFile($destinationPath.'small/'.$name, 'image/jpeg');

            // save resized version 2
            $mediumImage = new SimpleImage();
            $mediumImage->fromFile($image)->resize(450, 280)->toFile($destinationPath.'medium/'.$name, 'image/jpeg');
            
            $this->attributes['video_thumbnail'] = $name;
        }else{
            unset($this->attributes['video_thumbnail']);
        }
    }

    /**
     * Menu scope a query
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
     * Gallery scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeImage($query)
    {
        $query->where('type','Image');
    }

    /**
     * Gallery scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeVideo($query)
    {
        $query->where('type','Video');
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
