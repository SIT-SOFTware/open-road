<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasUuids;

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
