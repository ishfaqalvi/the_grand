<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\EloquentFilters\BranchId;
use App\EloquentFilters\Status;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;
use OwenIt\Auditing\Contracts\Auditable;
use claviska\SimpleImage;

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
class Category extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Filterable;
    
    static $rules = [
		'branch_id' => 'required',
		'title' => 'required',
		'link' => 'required',
		'label' => 'required',
		'order' => 'required',
    ];

    protected $filters = [BranchId::class, Status::class];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'branch_id',
        'title',
        'image',
        'image_link',
        'image_link_title',
        'video_link',
        'video_link_title',
        'label',
        'order',
        'status'
    ];

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
            $extension = $image->getClientOriginalExtension();
            $name = 'upload/images/category/'.uniqid().".".$extension;
            $simpleImage = new SimpleImage();
            $simpleImage->fromFile($image)->resize(570,380)->toFile($name, 'image/jpeg');
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
