<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();

        Student::create([
            'institution_id' => 1,
            'name' => 'some good name',
            'email' => 'student@email.com',
            'contact' => '098765678876',
            'level' => '100'
        ]);

        Student::create([
            'institution_id' => 2,
            'name' => 'some awesome name',
            'email' => 'student1@email.com',
            'contact' => '0987658876',
            'level' => '400'
        ]);
    }
}
