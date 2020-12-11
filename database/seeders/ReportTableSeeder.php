<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::truncate();

        Report::create([
            'student_id' => 1,
            'title' => 'Raping class rep in international hostel',
            'offence' => 'A ton of words and letters and sentences will go into making this a lenghty reporn describing what the offence actually is'
        ]);

        Report::create([
            'student_id' => 2,
            'title' => 'stealing television set in international hostel',
            'offence' => 'A ton of words and letters and sentences will go into making this a lenghty reporn describing what the offence actually is'
        ]);
    }
}
