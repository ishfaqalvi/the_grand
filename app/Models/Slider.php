<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\EloquentFilters\BranchId;
use App\EloquentFilters\Status;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;
use OwenIt\Auditing\Contracts\Auditable;
use claviska\SimpleImage;

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
class Slider extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Filterable;
    
    static $rules = [
		'type'       => 'required',
		'title'      => 'required',
		'sub_title'  => 'required',
		'linktype'   => 'required',
		'link'       => 'required',
        'button_text'=> 'required',
        'stars'      => 'required',
		'order'      => 'required',
    ];

    protected $filters = [BranchId::class, Status::class];

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
        'button_text',
        'stars',
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
            $extension = $image->getClientOriginalExtension();
            $name = 'upload/images/sliders/'.uniqid().".".$extension;
            $simpleImage = new SimpleImage();
            $simpleImage->fromFile($image)->resize(1920, 1200)->toFile($name, 'image/jpeg');
            $this->attributes['image'] = $name;
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
}
