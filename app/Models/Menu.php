<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

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

    /**
     * Menu scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeUserBasedHeader($query)
    {
        if (auth()->user()->type == 'Branch') {
            $query->where([['branch_id', auth()->user()->branch_id],['type','Header']]);
        }else{
            $query->where('type','Header');
        }
    }

    /**
     * Menu scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeUserBasedFooter($query)
    {
        if (auth()->user()->type == 'Branch') {
            $query->where([['branch_id', auth()->user()->branch_id],['type','Footer']]);
        }else{
            $query->where('type','Footer');
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
