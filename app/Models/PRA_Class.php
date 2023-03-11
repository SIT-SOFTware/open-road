<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PRA_Class extends Model
{
    use HasUuids;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pra_classes';

    protected $guarded = [];

    protected $keyType = 'string';

    protected $dates = ['CLASS_START', 'CLASS_END'];
}
