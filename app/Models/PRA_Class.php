<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PRA_Class extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pra_classes';

    protected $guarded = [];

    protected $casts = [
    'CLASS_START' => 'datetime:Y-m-d',
    'CLASS_END' => 'datetime:Y-m-d',
    ];
}
