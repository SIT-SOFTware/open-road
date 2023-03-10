<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasUuids;

    protected $table = 'advertisements';
    protected $primaryKey = 'ADVERTISEMENT_ID';
    public $timestamps = false;

    protected $fillable = [
        'ADVERTISEMENT_ID',
        'AD_TITLE',
        'AD_DESCRIPTION',
        'AD_URL',
        'AD_PATH',
        'AD_SPACE_TYPE',
        'AD_LOCATION',
        'START_DATE',
        'END_DATE',
        'created_at',
        'updated_at',
        'deleted_at',
        'id'
    ];
}
