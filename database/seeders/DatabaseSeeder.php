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
        $this->call(PermissionSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(DynamicStringSeeder::class);
    }
}
