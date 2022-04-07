<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscriptions')->insert([
            'name' => 'bronze',
            'description' => '',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'silver',
            'description' => '',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'gold',
            'description' => '',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'platinum',
            'description' => '',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'free',
            'description' => '',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'basic',
            'description' => '',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'plus',
            'description' => '',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'pro',
            'description' => '',
            'cost' => 0
        ]);
    }
}
