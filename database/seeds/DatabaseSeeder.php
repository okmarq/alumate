<?php

use Database\Seeders\CountrySeeder;
use Database\Seeders\StateSeeder;
use Database\Seeders\ImageTypeSeeder;
use Database\Seeders\ProgramSeeder;
use Database\Seeders\SchoolTypeSeeder;
use Database\Seeders\SubscriptionSeeder;
use Database\Seeders\ProfessionSeeder;
use Database\Seeders\CitySeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ImageTypeSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(SchoolTypeSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(ProfessionSeeder::class);
    }
}
