<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_types')->insert([
            'name' => 'bootcamp'
        ]);
        DB::table('school_types')->insert([
            'name' => 'college'
        ]);
        DB::table('school_types')->insert([
            'name' => 'creche'
        ]);
        DB::table('school_types')->insert([
            'name' => 'diploma'
        ]);
        DB::table('school_types')->insert([
            'name' => 'nursery'
        ]);
        DB::table('school_types')->insert([
            'name' => 'polytechnic'
        ]);
        DB::table('school_types')->insert([
            'name' => 'primary'
        ]);
        DB::table('school_types')->insert([
            'name' => 'secondary'
        ]);
        DB::table('school_types')->insert([
            'name' => 'university'
        ]);
    }
}
