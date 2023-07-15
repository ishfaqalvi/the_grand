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
		'image'=> 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','slug','image'];

    /**
     * Set the image attribute.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function setImageAttribute($image)
    {
        if ($image) {
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filenametostore = 'upload/images/branches/'.time().'.webp';
            $img = Image::make($image)->encode('webp', 90);   
            $img->save(public_path($filenametostore));
            $this->attributes['image'] = $filenametostore;
        }else{
            unset($this->attributes['image']);
        }
    }
}
