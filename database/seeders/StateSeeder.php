<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => "Abia",
            'capital' => 'Umuahia',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Adamawa",
            'capital' => 'Yola',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Akwa State",
            'capital' => 'Uyo',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Anambra",
            'capital' => 'Awka',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Bauchi",
            'capital' => 'Bauchi',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Bayelsa",
            'capital' => 'Yenagoa',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Benue",
            'capital' => 'Makurdi',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Borno",
            'capital' => 'Maiduguri',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Cross River",
            'capital' => 'Calabar',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Delta",
            'capital' => 'Asaba',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Ebonyi",
            'capital' => 'Abakaliki',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Edo",
            'capital' => 'Benin City',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Ekiti",
            'capital' => 'Ado Ekiti',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Enugu",
            'capital' => 'Enugu',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Gombe",
            'capital' => 'Gombe',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Imo",
            'capital' => 'Owerri',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Jigawa",
            'capital' => 'Dutse',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Kaduna",
            'capital' => 'Kaduna',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Kano",
            'capital' => 'Kano',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Katsina",
            'capital' => 'Katsina',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Kebbi",
            'capital' => 'Birnin Kebbi',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Kogi",
            'capital' => 'Lokoja',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Kwara",
            'capital' => 'Ilorin',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Lagos",
            'capital' => 'Ikeja',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Nasarawa",
            'capital' => '(Lafia',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Niger",
            'capital' => 'Minna',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Ogun",
            'capital' => 'Abeokuta',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Ondo",
            'capital' => 'Akure',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Osun",
            'capital' => 'Oshogbo',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Oyo",
            'capital' => 'Ibadan',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Plateau",
            'capital' => 'Jos',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Rivers",
            'capital' => 'Port Harcourt',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Sokoto",
            'capital' => 'Sokoto',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Taraba",
            'capital' => 'Jalingo',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Yobe",
            'capital' => 'Damaturu',
            'country_id' => 129
        ]);
        DB::table('states')->insert([
            'name' => "Zamfara",
            'capital' => 'Gusau',
            'country_id' => 129
        ]);
    }
}
