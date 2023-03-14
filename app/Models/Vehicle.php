<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Vehicle extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $primaryKey = 'VEHICLE_STOCK_NUM';

    protected $keyType = 'string';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    // /**
    //  * The attributes that should be cast
    //  */
    // protected $casts = [
    //     'VEHICLE_TYPE' => 'integer',
    // ];

    // /**
    //  * Get vehicle type based on int in vehicles.VEHICLE_TYPE field and returns corresponding string
    //  */
    // protected function vehicleType(): Attribute
    // {
    //     return Attribute::make(
    //         get : fn (int $value) => ['bike', 'atv'][$value],
    //     );
    // }
}
