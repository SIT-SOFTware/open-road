<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisement';
    protected $primaryKey = 'ADVERTISEMENT_ID';
    public $timestamps = false;

    protected $fillable = [
        'USER_ID',
        'AD_TITLE',
        'AD_DESCRIPTION',
        'AD_URL',
        'AD_PATH',
        'AD_SPACE_TYPE',
        'AD_LOCATION',
        'START_DATE',
        'END_DATE',
        'CREATED',
        'LAST_UPDATED',
        'DELETED',
    ];
}
