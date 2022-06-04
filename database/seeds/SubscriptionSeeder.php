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
            'description' => 'Id non labore qui ad commodo.',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'silver',
            'description' => 'Laboris incididunt consectetur amet proident.',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'gold',
            'description' => 'Duis proident ad anim ut enim elit mollit nostrud nostrud eiusmod dolore laborum eiusmod tempor.',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'platinum',
            'description' => 'Proident aliqua consequat voluptate eu esse enim id anim et enim sit et velit sunt.',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'free',
            'description' => 'Deserunt commodo minim sit adipisicing elit et laboris.',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'basic',
            'description' => 'In esse consectetur cillum quis ad cillum voluptate Lorem aliqua.',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'plus',
            'description' => 'Ipsum sit proident mollit aliqua mollit dolor magna.',
            'cost' => 0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'pro',
            'description' => 'Nulla esse pariatur ullamco cupidatat ea ad ad ut.',
            'cost' => 0
        ]);
    }
}
