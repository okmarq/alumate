<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            for ($j = 1; $j <= 20; $j++) {
                DB::table('alumnis')->insert([
                    'graduation_year' => 2000 + $i,
                    'admission_year' => 1995 + $i,
                    'school_id' => $i,
                    'user_id' => $j
                ]);
            }
        }
    }
}
