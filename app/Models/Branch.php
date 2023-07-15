<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
class Branch extends Model
{
    
    static $rules = [
		'name' => 'required',
		'url'  => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','name','url','thumbnail'];

    /**
     * Set the image attribute.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function setThumbnailAttribute($image)
    {
        if ($image) {
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filenametostore = 'upload/images/branches/'.time().'.webp';
            $img = Image::make($image)->encode('webp', 90)->resize(545, 360);   
            $img->save(public_path($filenametostore));
            $this->attributes['thumbnail'] = $filenametostore;
        }else{
            unset($this->attributes['thumbnail']);
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settings() {
        return $this->hasMany(Setting::class, 'branch_id','id');
    }
}
