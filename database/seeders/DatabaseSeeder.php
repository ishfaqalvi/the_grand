<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(AdminUserSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(NewsSeeder::class);
        
        $this->call(GallerySeeder::class);
        $this->call(FeedbackSeeder::class);
        
        // $this->call(DynamicStringSeeder::class);
    }
}
