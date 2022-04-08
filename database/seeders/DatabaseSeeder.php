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
        // \App\Models\User::factory(10)->create();
        $this->call([
            AddressSeeder::class,
            AddressBusinessSeeder::class,
            BusinessSeeder::class,
            CategorySeeder::class,
            ChatSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            CommentSeeder::class,
            DepartmentSeeder::class,
            FacultySeeder::class,
            ChatGroupSeeder::class,
            ImageSeeder::class,
            ImageTypeSeeder::class,
            JobApplicationSeeder::class,
            JobExperienceSeeder::class,
            JobIndustrySeeder::class,
            JobIndustryTitleSeeder::class,
            JobSeeder::class,
            JobTitleSeeder::class,
            NotificationSeeder::class,
            CategoryPostSeeder::class,
            PostReactionSeeder::class,
            PostSeeder::class,
            PrivateChatSeeder::class,
            ProfessionSeeder::class,
            DepartmentProgramSeeder::class,
            ProgramSeeder::class,
            ResumeSeeder::class,
            AddressSchoolSeeder::class,
            SchoolTypeSeeder::class,
            SchoolSeeder::class,
            SkillSeeder::class,
            SubscriptionSeeder::class,
            AddressUserSeeder::class,
            GroupUserSeeder::class,
            ImageUserSeeder::class,
            SubscriptionUserSeeder::class,
            UserSeeder::class,
            AlumniSeeder::class
        ]);
    }
}
