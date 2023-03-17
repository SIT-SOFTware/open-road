<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Core\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create admin user
        $admin = User::create([
            'id' => fake()->uuid(),
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Admin1'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'two_factor_confirmed_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         // assign admin role
         $admin->assignRole('admin');

        // create instructor user
       $instructor = User::create([
            'id' => fake()->uuid(),
            'name' => 'instructor',
            'email' => 'instructor@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Instructor1'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'two_factor_confirmed_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // assign instructor role
         $instructor->assignRole('instructor');

        // create student user
        $student= User::create([
            'id' => fake()->uuid(),
            'name' => 'student',
            'email' => 'student@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Student1'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'two_factor_confirmed_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // assign student role
         $student->assignRole('student');
    }
}
