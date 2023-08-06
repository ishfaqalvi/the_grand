<?php

namespace App\Models;

use App\EloquentFilters\BranchId;
use App\EloquentFilters\CategoryId;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;
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
            Image::make($image->path())->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(300, 185)->save($destinationPath.'small/'.$name);

            // save resized version 2
            Image::make($image->path())->resize(450, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(450, 280)->save($destinationPath.'medium/'.$name);

            // save resized version 3
            Image::make($image->path())->resize(295, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(295, 390)->save($destinationPath.'large/'.$name);

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
            $extension = $thumbnail->getClientOriginalExtension();
            $name = uniqid().".".$extension;

            $destinationPath = public_path('/upload/images/gallery/thumbnail/');

            // save original
            Image::make($image->path())->save($destinationPath.'original/'.$name);

            // save resized version 1
            Image::make($image->path())->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(292, 185)->save($destinationPath.'small/'.$name);

            // save resized version 2
            Image::make($image->path())->resize(450, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(450, 280)->save($destinationPath.'medium/'.$name);

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
