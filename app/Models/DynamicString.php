<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class DynamicString
 *
 * @property $id
 * @property $language_id
 * @property $key
 * @property $value
 * @property $created_at
 * @property $updated_at
 *
 * @property Language $language
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DynamicString extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    static $rules = [
		'key' => 'required',
		'value' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['key','value'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
