<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institution;

class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::truncate();

        Institution::create([
            'name' => 'Ghana Communication Technology University',
            'address' => 'Tesano Accra',
            'email' => 'gtuc@email.com'
        ]);

        Institution::create([
            'name' => 'University of Ghana',
            'address' => 'Legon - Accra',
            'email' => 'ug@email.com'
        ]);

        Institution::create([
            'name' => 'KNUST',
            'address' => 'Kumasi',
            'email' => 'knust@email.com'
        ]);
    }
}
