<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'REG_ID';

    protected $guarded = [];

    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'REG_ID';
    }
    public function pra_class()
    {
        return $this->belongsTo(PRA_Class::class, 'CLASS_ID');
    } 
}
