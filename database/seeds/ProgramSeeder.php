<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'name' => 'vocation'
        ]);
        DB::table('programs')->insert([
            'name' => 'diploma'
        ]);
        DB::table('programs')->insert([
            'name' => 'undergraduate'
        ]);
        DB::table('programs')->insert([
            'name' => 'graduate'
        ]);
        DB::table('programs')->insert([
            'name' => 'post-graduate'
        ]);

        // DB::table('certificate')->insert([
        //     'name' => 'license'
        // ]);
        // DB::table('certificate')->insert([
        //     'name' => 'certificate'
        // ]);
        // DB::table('certificate')->insert([
        //     'name' => 'associates'
        // ]);
        // DB::table('certificate')->insert([
        //     'name' => 'bachelors'
        // ]);
        // DB::table('certificate')->insert([
        //     'name' => 'masters'
        // ]);
        // DB::table('certificate')->insert([
        //     'name' => 'doctorate'
        // ]);

        // DB::table('degree')->insert([
        //     'name' => 'AS'
        // ]);
        // DB::table('degree')->insert([
        //     'name' => 'BSc'
        // ]);
        // DB::table('degree')->insert([
        //     'name' => 'BA'
        // ]);
        // DB::table('degree')->insert([
        //     'name' => 'MSc'
        // ]);
        // DB::table('degree')->insert([
        //     'name' => 'MBA'
        // ]);
        // DB::table('degree')->insert([
        //     'name' => 'PhD'
        // ]);
    }
}
