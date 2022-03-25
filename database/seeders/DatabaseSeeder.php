<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            // AddressSeeder::class,
            // AlumniSeeder::class,
            // BusinessAddressSeeder::class,
            // BusinessSeeder::class,
            // CategorySeeder::class,
            // ChatSeeder::class,
            // CountrySeeder::class,
            // StateSeeder::class,
            // CitySeeder::class,
            // CommentSeeder::class,
            // DepartmentSeeder::class,
            // FacultySeeder::class,
            // GroupChatSeeder::class,
            // ImageSeeder::class,
            // ImageTypeSeeder::class,
            // JobApplicationSeeder::class,
            // JobExperienceSeeder::class,
            // JobIndustrySeeder::class,
            // JobIndustryTitleSeeder::class,
            // JobSeeder::class,
            // JobTitleSeeder::class,
            // NotificationSeeder::class,
            // PostCategorySeeder::class,
            // PostReactionSeeder::class,
            // PostSeeder::class,
            // PrivateChatSeeder::class,
            // ProfessionSeeder::class,
            // ProgramDepartmentSeeder::class,
            // ProgramSeeder::class,
            // ResumeSeeder::class,
            // SchoolAddressSeeder::class,
            // SchoolTypeSeeder::class,
            SchoolSeeder::class,
            // SkillSeeder::class,
            // SubscriptionSeeder::class,
            // UserAddressSeeder::class,
            // UserGroupSeeder::class,
            // UserImageSeeder::class,
            // UserSubscriptionSeeder::class,
        ]);
    }
}
