<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_types')->insert([
            'name'=>'profile'
        ]);
        DB::table('image_types')->insert([
            'name'=>'group'
        ]);
        DB::table('image_types')->insert([
            'name'=>'post'
        ]);
        DB::table('image_types')->insert([
            'name'=>'category'
        ]);
    }
}
