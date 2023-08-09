<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\EloquentFilters\PageId;
use App\EloquentFilters\Status;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;
use OwenIt\Auditing\Contracts\Auditable;
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
class Service extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Filterable;

    static $rules = [
		'page_id'     => 'required',
        'heading'     => 'required',
		'sub_heading' => 'required',
		'link'        => 'required',
        'button_title'=> 'required',
		'description' => 'required',
        'detail'      => 'required',
		'order'       => 'required',
    ];

    protected $filters = [PageId::class, Status::class];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'image',
        'heading',
        'sub_heading',
        'link',
        'button_title',
        'description',
        'detail',
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
            $filenametostore = 'upload/images/services/'.uniqid().".".$extension;
            $img = Image::make($image)->crop(570,380)->save(public_path($filenametostore));
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
