<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Institution;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        
        $superAdminRole = Role::where('name', 'Super-Admin')->first();
        $disciplinaryOfficer = Role::where('name', 'Disciplinary-Officer')->first();

        // $ug = Institution::where('name', 'University of Ghana')->first();
        // $gtuc = Institution::where('name', 'Ghana Communication Technology University')->first();
        // $ugId = $ug->id;
        // $gtucId = $gtuc->id;

        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'super@super.com',
            'password' => Hash::make('password')
        ]);

        $officer = User::create([
            'name' => 'Disciplinary Officer',
            'email' => 'officer@officer.com',
            'password' => Hash::make('password'),
            'Institution_id' => 1
        ]);

        $officer1 = User::create([
            'name' => 'Disciplinary Officer 1',
            'email' => 'officer1@officer1.com',
            'password' => Hash::make('password'),
            'Institution_id' => 2,
        ]);

        $superAdmin->roles()->attach($superAdminRole);
        $officer->roles()->attach($disciplinaryOfficer);
        $officer1->roles()->attach($disciplinaryOfficer);
    }
}
