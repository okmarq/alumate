<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            DepartmentSeeder::class,
            ImageTypeSeeder::class,
            ProgramSeeder::class,
            SchoolTypeSeeder::class,
            SubscriptionSeeder::class,
            // DepartmentProgramSeeder::class,
            // ChatGroupSeeder::class,
            // ProfessionSeeder::class,
            // AddressSeeder::class,
            // AddressBusinessSeeder::class,
            // BusinessSeeder::class,
            // CategorySeeder::class,
            // ChatSeeder::class,
            // CitySeeder::class,
            // CommentSeeder::class,
            // FacultySeeder::class,
            // ImageSeeder::class,
            // JobApplicationSeeder::class,
            // JobExperienceSeeder::class,
            // JobIndustrySeeder::class,
            // JobIndustryTitleSeeder::class,
            // JobSeeder::class,
            // JobTitleSeeder::class,
            // NotificationSeeder::class,
            // CategoryPostSeeder::class,
            // PostReactionSeeder::class,
            // PostSeeder::class,
            // PrivateChatSeeder::class,
            // ResumeSeeder::class,
            // AddressSchoolSeeder::class,
            // SchoolSeeder::class,
            // SkillSeeder::class,
            // AddressUserSeeder::class,
            // GroupUserSeeder::class,
            // ImageUserSeeder::class,
            // SubscriptionUserSeeder::class,
            // UserSeeder::class,
            // AlumniSeeder::class
        ]);
    }
}
