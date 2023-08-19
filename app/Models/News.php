<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\EloquentFilters\PageId;
use App\EloquentFilters\Status;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

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
class News extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Filterable;

    static $rules = [
		'page_id'     => 'required',
        'heading'     => 'required',
		'sub_heading' => 'required',
		'date'        => 'required',
		'url'         => 'required',
		'description' => 'required',
		'order'       => 'required'
    ];

    protected $filters = [PageId::class, Status::class];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'heading',
        'sub_heading',
        'image',
        'date',
        'url',
        'description',
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
            $name = uniqid().".".$extension;

            $path = public_path('upload/images/news/');
            $finalPath = $path.$name;
            $image->move($path, $name);

            Image::load($finalPath)
                ->fit(Manipulations::FIT_CROP, 352,469)
                ->save($finalPath);
            $this->attributes['image'] = $finalPath;
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
