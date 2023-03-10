<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasUuids;
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $keyType = 'string';

}
