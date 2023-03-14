<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            'VEHICLE_STOCK_NUM' => 'yam-0998',
            'VEHICLE_VIN' => 'JYAVP11E9XA000998',
            'VEHICLE_YEAR' => '1999',
            'VEHICLE_MAKE' => 'yamaha',
            'VEHICLE_MODEL' => 'xvs1100',
            'VEHICLE_ODO' => '0000000000',
            'VEHICLE_TYPE' => 1,
            'VEHICLE_COLOR' => 'blue',
            'VEHICLE_SIZE' => '1100',
            'AVAIL_STATUS' => '1',
            'NOTES' => '',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,

        ]);
        DB::table('vehicles')->insert([
            'VEHICLE_STOCK_NUM' => 'hon-0050',
            'VEHICLE_VIN' => '478TE1422XA100050',
            'VEHICLE_YEAR' => '1999',
            'VEHICLE_MAKE' => 'honda',
            'VEHICLE_MODEL' => 'trx300',
            'VEHICLE_ODO' => '0000000000',
            'VEHICLE_TYPE' => 1,
            'VEHICLE_COLOR' => 'red',
            'VEHICLE_SIZE' => '300',
            'AVAIL_STATUS' => 1,
            'NOTES' => '',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,

        ]);
        DB::table('vehicles')->insert([
            'VEHICLE_STOCK_NUM' => 'hon-2292',
            'VEHICLE_VIN' => '3CZRM3H93DG702292',
            'VEHICLE_YEAR' => '2013',
            'VEHICLE_MAKE' => 'honda',
            'VEHICLE_MODEL' => 'trx500',
            'VEHICLE_ODO' => '0000000000',
            'VEHICLE_TYPE' => 2,
            'VEHICLE_COLOR' => 'red',
            'VEHICLE_SIZE' => '500',
            'AVAIL_STATUS' => 1,
            'NOTES' => '',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,

        ]);
    }
}
