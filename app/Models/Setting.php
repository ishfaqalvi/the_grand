<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['settable_type','settable_id','key','value'];

    /**
     * Branch scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeBranch($query, $id = null)
    {
        $brach = isset($id) ? $id : auth()->user()->branch_id;
        $query->where([['settable_type', 'Branch'],['settable_id',$brach]]);
    }

    /**
     * Branch scope a query
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopePage($query, $id)
    {
        $query->where([['settable_type', 'Page'],['settable_id',$id]]);
    }
}
