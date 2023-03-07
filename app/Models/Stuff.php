<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stuff extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'STUFF_ID';
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}