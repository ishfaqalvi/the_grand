<?php

namespace App\Models;

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
        'canonical',
        'metaTitle',
        'metaDescription',
        'description',
        'og_tags',
        'schemas',
        'content',
        'status'
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
        return $this->hasMany('App\Models\Service', 'id', 'page_id');
    }
}
