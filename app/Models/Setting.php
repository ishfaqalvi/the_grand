<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    static $rules = [
        'branch_id' => 'required',
        'key' 		=> 'required',
        'value' 	=> 'required',
    ];

    protected $fillable = ['branch_id','key', 'value'];

    static function get($key) {
    	return self::where('key', $key)->pluck('value')->first();
    }

    static function set($data) {
        return Setting::upsert( $data, ['key'], ['value']);
    }
}
