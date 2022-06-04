<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Accounting'
        ]);
        DB::table('departments')->insert([
            'name' => 'Agriculture'
        ]);
        DB::table('departments')->insert([
            'name' => 'Arts'
        ]);
        DB::table('departments')->insert([
            'name' => 'Biological Sciences'
        ]);
        DB::table('departments')->insert([
            'name' => 'Administration'
        ]);
        DB::table('departments')->insert([
            'name' => 'Dentistry'
        ]);
        DB::table('departments')->insert([
            'name' => 'Education'
        ]);
        DB::table('departments')->insert([
            'name' => 'Engineering'
        ]);
        DB::table('departments')->insert([
            'name' => 'Environmental Sciences'
        ]);
        DB::table('departments')->insert([
            'name' => 'Health Sciences & Technology'
        ]);
        DB::table('departments')->insert([
            'name' => 'Law'
        ]);
        DB::table('departments')->insert([
            'name' => 'Medical Sciences'
        ]);
        DB::table('departments')->insert([
            'name' => 'Pharmaceutical Sciences'
        ]);
        DB::table('departments')->insert([
            'name' => 'Physical Sciences'
        ]);
        DB::table('departments')->insert([
            'name' => 'Social Sciences'
        ]);
        DB::table('departments')->insert([
            'name' => 'Veterinary Medicine'
        ]);
    }
}