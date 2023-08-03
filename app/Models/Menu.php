<?php

namespace App\Models;

use App\EloquentFilters\BranchId;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Abdrzakoxa\EloquentFilter\Traits\Filterable;

/**
 * Class Menu
 *
 * @property $id
 * @property $type
 * @property $title
 * @property $url
 * @property $order
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Menu extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Filterable;

    static $rules = [
		'branch_id' => 'required',
        'type'      => 'required',
		'title'     => 'required',
		'url'       => 'required',
		'order'     => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id','type','parent_id','title','url','order'];

    protected $filters = [
        BranchId::class
    ];

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
     * Menu scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeHeader($query)
    {
        $query->where('type','Header');
    }

    /**
     * Menu scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeFooter($query)
    {
        $query->where('type','Footer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parent()
    {
        return $this->hasOne(self::class, 'id', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childItems() {
        return $this->hasMany(Menu::class, 'parent_id','id');
    }
}
