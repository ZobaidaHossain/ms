<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            ModuleSeeder::class,
            PermissionSeeder::class,
            UserRoleSeeder::class,
            RolePermissionSeeder::class,
            SliderSeeder::class,
            AboutUsSeeder::class,
            FounderSeeder::class,
            ServiceSeeder::class,
            BackgroundSeeder::class,
            BgMemorySeeder::class,
            HeadingSeeder::class,
            GoalSeeder::class,
            TeamSeeder::class,
            SocialSeeder::class,
            GallerySeeder::class,
            VideoSeeder::class,
            ExecutiveSeeder::class,
            ContractSeeder::class,
            ObjectiveSeeder::class,
            NoticeSeeder::class,
            HelpSeeder::class,
            AudienceSeeder::class,
            IntroductionSeeder::class,
            ProjectSeeder::class,
            OrganizationSeeder::class,
            PhotoSeeder::class,
            SupportSeeder::class,
            ZoneSeeder::class,
            DonationSeeder::class,
        ]);
    }
}
