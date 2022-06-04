<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DotSqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $states = database_path('sql/states.sql');
        DB::unprepared(file_get_contents($states));
        $this->command->info('States table seeded.');
    }
}
