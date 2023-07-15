<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BranchSetting extends Model
{
    use HasFactory;

    protected $id = 'id';

    protected $fillable = [
        'branch_id',
        'key',
        'value',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
