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
        for ($i = 1; $i <= 40; $i++) {
            for ($j = 1; $j <= 40; $j++) {
                DB::table('alumnis')->insert([
                    'graduation_year' => 1775 + $i,
                    'admission_year' => 1980 + $i,
                    'school_id' => $i,
                    'user_id' => $j
                ]);
            }
        }
    }
}
