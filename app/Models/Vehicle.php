<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'VEHICLE_STOCK_NUM';

    protected $keyType = 'string';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'VEHICLE_STOCK_NUM';
    }
}
