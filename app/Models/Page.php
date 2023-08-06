<?php

namespace App\Models;

use App\EloquentFilters\BranchId;
use App\EloquentFilters\Template;
use App\EloquentFilters\Status;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Image;

/**
 * Class Page
 *
 * @property $id
 * @property $auther_id
 * @property $title
 * @property $slug
 * @property $metaTitle
 * @property $metaDescription
 * @property $status
 * @property $content
 * @property $published_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Auther $auther
 * @property PageOpenGraph[] $pageOpenGraphs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Page extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Filterable;

    static $rules = [
		'title'       => 'required',
		'slug'        => 'required',
		'status'      => 'required',
		'content'     => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'branch_id',
        'template',
        'title',
        'slug',
        'metaTitle',
        'metaDescription',
        'description',
        'og_tags',
        'schemas',
        'content',
        'index',
        'status'
    ];

    protected $filters = [
        BranchId::class,
        Template::class,
        Status::class
    ];

    /**
     * Page scope a query
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'page_id', 'id')->where('status','Publish');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilities()
    {
        return $this->hasMany('App\Models\Facility', 'page_id', 'id')->where('status','Publish');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany('App\Models\News', 'page_id', 'id')->where('status','Publish');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settings()
    {
        return $this->morphMany(Setting::class, 'settable');
    }
}
