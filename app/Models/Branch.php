<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use OwenIt\Auditing\Contracts\Auditable;
use Image;

/**
 * Class Branch
 *
 * @property $id
 * @property $name
 * @property $prefix
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Branch extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    static $rules = [
		'type'      => 'required',
        'name'      => 'required',
        'label'     => 'required',
		'url'       => 'required',
        'url_title' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','name','label','url','url_title','thumbnail'];

    /**
     * Set the image attribute.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function setThumbnailAttribute($image)
    {
        if ($image) {
            // Get file's original extension
            $extension = $image->getClientOriginalExtension();

            // Create unique file name
            $name = 'upload/images/branches/'.uniqid().".".$extension;
            $img = Image::make($image)->resize(545, 360)->save(public_path($name));
            $this->attributes['thumbnail'] = $name;
        }else{
            unset($this->attributes['thumbnail']);
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settings()
    {
        return $this->morphMany(Setting::class, 'settable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pages() {
        return $this->hasMany(Page::class, 'branch_id','id');
    }
}
