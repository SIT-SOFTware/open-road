<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cahced roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        // User model permissions
        Permission::create(['name' => 'view user index']);
        Permission::create(['name' => 'show admin']);
        Permission::create(['name' => 'show instructor']);
        Permission::create(['name' => 'show student']);
        Permission::create(['name' => 'create student']);
        Permission::create(['name' => 'create instructor']);
        Permission::create(['name' => 'create admin']);
        // Permission::create(['name' => 'update any user']);
        Permission::create(['name' => 'update admin']);
        Permission::create(['name' => 'update instructor']);
        Permission::create(['name' => 'update student']);
        // Permission::create(['name' => 'trash any user']);
        Permission::create(['name' => 'trash admin']);
        Permission::create(['name' => 'trash instructor']);
        Permission::create(['name' => 'trash student']);
        Permission::create(['name' => 'restore admin']);
        Permission::create(['name' => 'restore user']);
        Permission::create(['name' => 'forceDelete user']);

        // Stuff model permissions
        Permission::create(['name' => 'view stuff index']);
        Permission::create(['name' => 'show stuff']);
        Permission::create(['name' => 'create stuff']);
        // Permission::create(['name' => 'update any stuff']);
        Permission::create(['name' => 'update stuff']);
        // Permission::create(['name' => 'trash any stuff']);
        Permission::create(['name' => 'trash stuff']);
        Permission::create(['name' => 'restore stuff']);
        Permission::create(['name' => 'forceDelete stuff']);

        // Course model permisssions
        Permission::create(['name' => 'view course index']);
        Permission::create(['name' => 'show course']);
        Permission::create(['name' => 'create course']);
        Permission::create(['name' => 'update course']);
        Permission::create(['name' => 'trash course']);
        Permission::create(['name' => 'restore course']);
        Permission::create(['name' => 'forceDelete course']);

        // PRA_class model permissions
        Permission::create(['name' => 'view class index']);
        Permission::create(['name' => 'show class']);
        Permission::create(['name' => 'create class']);
        Permission::create(['name' => 'update class']);
        Permission::create(['name' => 'trash class']);
        Permission::create(['name' => 'restore class']);
        Permission::create(['name' => 'forceDelete class']);

        // Registration model permissions
        Permission::create(['name' => 'view registration index']);
        Permission::create(['name' => 'show registration']);
        Permission::create(['name' => 'view class list']);
        Permission::create(['name' => 'create registration']);
        // Permission::create(['name' => 'update any registration']);
        Permission::create(['name' => 'update registration']);
        // Permission::create(['name' => 'trash any registration']);
        Permission::create(['name' => 'trash registration']);
        Permission::create(['name' => 'restore registration']);
        Permission::create(['name' => 'forceDelete registration']);

        // Invoice model permissions
        Permission::create(['name' => 'view invoice index']);
        Permission::create(['name' => 'show invoice']);
        Permission::create(['name' => 'create invoice']);
        // Permission::create(['name' => 'update any invoice']);
        Permission::create(['name' => 'update invoice']);
        // Permission::create(['name' => 'trash any invoice']);
        Permission::create(['name' => 'trash invoice']);
        Permission::create(['name' => 'restore invoice']);
        Permission::create(['name' => 'forceDelete invoice']);

        // Advertisement model permissions
        Permission::create(['name' => 'view ad index']);
        Permission::create(['name' => 'show ad']);
        Permission::create(['name' => 'create ad']);
        Permission::create(['name' => 'update ad']);
        Permission::create(['name' => 'trash ad']);
        Permission::create(['name' => 'restore ad']);
        Permission::create(['name' => 'forceDelete ad']);

        // Vehicle model permissions
        Permission::create(['name' => 'view vehicle index']);
        Permission::create(['name' => 'show vehicle']);
        Permission::create(['name' => 'create vehicle']);
        Permission::create(['name' => 'update vehicle']);
        Permission::create(['name' => 'trash vehicle']);
        Permission::create(['name' => 'restore vehicle']);
        Permission::create(['name' => 'forceDelete vehicle']);

        // Incident model permissions
        Permission::create(['name' => 'view incident index']);
        Permission::create(['name' => 'show incident']);
        Permission::create(['name' => 'create incident']);
        // Permission::create(['name' => 'update any incident']);
        Permission::create(['name' => 'update incident']);
        // Permission::create(['name' => 'trash any incident']);
        Permission::create(['name' => 'trash incident']);
        // Permission::create(['name' => 'restore any incident']);
        Permission::create(['name' => 'restore incident']);
        Permission::create(['name' => 'forceDelete incident']);

        // DamageReport model permissions
        Permission::create(['name' => 'view dmgReport index']);
        Permission::create(['name' => 'show dmgReport']);
        Permission::create(['name' => 'create dmgReport']);
        // Permission::create(['name' => 'update any dmgReport']);
        Permission::create(['name' => 'update dmgReport']);
        // Permission::create(['name' => 'trash any dmgReport']);
        Permission::create(['name' => 'trash dmgReport']);
        // Permission::create(['name' => 'restore any dmgReport']);
        Permission::create(['name' => 'restore dmgReport']);
        Permission::create(['name' => 'forceDelete dgmReport']);

        // Logging model permissions
        Permission::create(['name' => 'view log index']);
        Permission::create(['name' => 'show log']);
        Permission::create(['name' => 'create log']);
        Permission::create(['name' => 'update log']);
        Permission::create(['name' => 'trash log']);
        Permission::create(['name' => 'restore log']);
        Permission::create(['name' => 'forceDelete log']);

        // TimeOff model permissions
        Permission::create(['name' => 'view TOR index']);
        Permission::create(['name' => 'show TOR']);
        Permission::create(['name' => 'create TOR']);
        // Permission::create(['name' => 'update any TOR']);
        Permission::create(['name' => 'update TOR']);
        // Permission::create(['name' => 'trash any TOR']);
        Permission::create(['name' => 'trash TOR']);
        // Permission::create(['name' => 'restore any TOR']);
        Permission::create(['name' => 'restore TOR']);
        Permission::create(['name' => 'forceDelete TOR']);

        // f_a_q_s model permissions
        Permission::create(['name' => 'view FAQ index']);
        Permission::create(['name' => 'show FAQ']);
        Permission::create(['name' => 'create FAQ']);
        Permission::create(['name' => 'update FAQ']);
        Permission::create(['name' => 'trash FAQ']);
        Permission::create(['name' => 'restore FAQ']);
        Permission::create(['name' => 'forceDelete FAQ']);

        // meet_teams model permissions
        Permission::create(['name' => 'view teammate index']);
        Permission::create(['name' => 'show teammate']);
        Permission::create(['name' => 'create teammate']);
        Permission::create(['name' => 'update teammate']);
        Permission::create(['name' => 'trash teammate']);
        Permission::create(['name' => 'restore teammate']);
        Permission::create(['name' => 'forceDelete teammate']);

        // roles model permissions
        Permission::create(['name' => 'view role index']);
        Permission::create(['name' => 'show role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        // permissions model permissions
        Permission::create(['name' => 'view permission index']);
        Permission::create(['name' => 'show permission']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        // create admin role and assign permissions
        $adminRole = Role::create(['name' => 'admin']);
        // User permissions
        $adminRole->givePermissionTo(['view user index', 'show instructor', 'show student', 'create student', 'create instructor', 'trash instructor', 'trash student', 'restore user']);
        // Stuff permissions
        $adminRole->givePermissionTo(['view stuff index', 'show stuff', 'create stuff', 'trash stuff', 'restore stuff']);
        // Course permissions
        $adminRole->givePermissionTo(['view course index', 'show course', 'create course', 'update course', 'trash course', 'restore course']);
        // PRA_Class permissions
        $adminRole->givePermissionTo(['view class index', 'show class', 'create class', 'update class', 'trash class', 'restore class']);
        // Registration permissions
        $adminRole->givePermissionTo(['view registration index', 'show registration', 'view class list', 'create registration', 'restore registration']);
        // Invoice permissions
        $adminRole->givePermissionTo(['view invoice index', 'show invoice', 'create invoice', 'update invoice', 'trash invoice', 'restore invoice']);
        // Advertisement permissions
        $adminRole->givePermissionTo(['view ad index', 'show ad', 'create ad', 'update ad', 'trash ad', 'restore ad']);
        // Vehicle permissions
        $adminRole->givePermissionTo(['view vehicle index', 'show vehicle', 'create vehicle', 'update vehicle', 'trash vehicle', 'restore vehicle']);
        // Incident permissions
        $adminRole->givePermissionTo(['view incident index', 'show incident', 'create incident', 'update incident', 'trash incident', 'restore incident']);
        // DamageReport permissions
        $adminRole->givePermissionTo(['view dmgReport index', 'show dmgReport', 'create dmgReport', 'update dmgReport', 'trash dmgReport', 'restore dmgReport']);
        // Logging permissions
        $adminRole->givePermissionTo(['view log index', 'show log', 'create log', 'update log', 'trash log', 'restore log']);
        // TimeOff permissions
        $adminRole->givePermissionTo(['view TOR index', 'show TOR', 'create TOR', 'update TOR', 'trash TOR', 'restore TOR']);
        // f_a_q_s permissions
        $adminRole->givePermissionTo(['view FAQ index', 'show FAQ', 'create FAQ', 'update FAQ', 'trash FAQ', 'restore FAQ']);
        // meet_teams permissions
        $adminRole->givePermissionTo(['view teammate index', 'show teammate', 'create teammate', 'update teammate', 'trash teammate', 'restore teammate']);
        // role permissions
        $adminRole->givePermissionTo(['view role index', 'show role', 'create role', 'update role', 'delete role']);
        // permission permissions
        $adminRole->givePermissionTo(['view permission index', 'show permission', 'create permission', 'update permission', 'delete permission']);

        // create instructor role and assign permissions
        $instructorRole = Role::create(['name' => 'instructor']);
        // User permissions
        $instructorRole->givePermissionTo(['show instructor', 'update instructor', 'trash instructor']);
        // Stuff permissions
        $instructorRole->givePermissionTo(['show stuff', 'update stuff']);
        // Course permissions
        $instructorRole->givePermissionTo(['view course index', 'show course']);
        // PRA_Class permissions
        $instructorRole->givePermissionTo(['view class index', 'show class']);
        // Registration permissions
        $instructorRole->givePermissionTo(['show registration', 'view class list', 'trash registration']);
        // Invoice permissions
        $instructorRole->givePermissionTo(['show invoice']);
        // Advertisement permissions
        // NONE
        // Vehicle permissions
        $instructorRole->givePermissionTo(['view vehicle index', 'show vehicle', 'update vehicle']);
        //Incident permissions
        $instructorRole->givePermissionTo(['view incident index', 'show incident', 'create incident', 'update incident']);
        // DamageReport permissions
        $instructorRole->givePermissionTo(['view dmgReport index', 'show dmgReport', 'create dmgReport', 'update dmgReport']);
        // Logging permissions
        // NONE
        // TimeOff permissions
        $instructorRole->givePermissionTo(['show TOR', 'create TOR', 'trash TOR']);
        // f_a_q permission
        // NONE
        // meet_teams permissions
        //NONE
        // role permissions
        $instructorRole->givePermissionTo(['show role']);
        // permission permissions
        // NONE


        // create student role and assign permissions
        $studentRole = Role::create(['name' => 'student']);
        // User permissions
        $studentRole->givePermissionTo(['show student', 'create student','update student', 'trash student']);
        // Stuff permissions
        $studentRole->givePermissionTo(['show stuff', 'create stuff', 'update stuff', 'trash stuff']);
        // Course permissions
        // NONE
        // PRA_Class permissions
        // NONE
        // Registration permissions
        $studentRole->givePermissionTo(['show registration', 'create registration', 'update registration', 'trash registration']);
        // Invoice permissions
        $studentRole->givePermissionTo(['show invoice']);
        // Advertisement permissions
        // NONE
        // Vehicle permissions
        // NONE
        // Incident permissions
        // NONE
        // DamageReport permissions
        // NONE
        // Logging permissions
        // none
        // TimeOff permissions
        // NONE
        // f_a_q permission
        // NONE
        // meet_teams permissions
        //NONE
        // role permissions
        // NONE
        // permission permissions
        // NONE

    }
}
