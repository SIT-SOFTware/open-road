<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{

    protected $table = 'advertisements';
    public $timestamps = true;

    protected $fillable = [
        'AD_TITLE',
        'AD_DESCRIPTION',
        'AD_URL',
        'AD_PATH',
        'AD_SPACE_TYPE',
        'AD_LOCATION',
        'START_DATE',
        'END_DATE',
        'USER_ID',
    ];
}
