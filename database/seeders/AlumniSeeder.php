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
                for ($k = 1; $k <= 20; $k++) {
                    DB::table('alumnis')->insert([
                        'graduation_year' => 2000 + $k,
                        'admission_year' => 1995 + $k,
                        'school_id' => $j,
                        'user_id' => $j
                    ]);
                }
            }
        }
    }
}
