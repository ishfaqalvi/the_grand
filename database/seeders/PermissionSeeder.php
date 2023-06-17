<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {
            $permissions = [
                  'roles-list', 
                  'roles-view', 
                  'roles-create', 
                  'roles-edit', 
                  'roles-delete',

                  'users-list', 
                  'users-view', 
                  'users-create', 
                  'users-edit', 
                  'users-delete',

                  'media-list', 
                  'media-view', 
                  'media-create', 
                  'media-edit', 
                  'media-delete',

                  'menu-list', 
                  'menu-view', 
                  'menu-create', 
                  'menu-edit', 
                  'menu-delete',

                  'strings-list', 
                  'strings-view', 
                  'strings-create', 
                  'strings-edit', 
                  'strings-delete',


                  'homePage-list', 
                  'homePage-view', 
                  'homePage-create', 
                  'homePage-edit', 
                  'homePage-delete',
                  'homePage-publish',
                  'homePage-unPublish',


                  'blogPage-list', 
                  'blogPage-view', 
                  'blogPage-create', 
                  'blogPage-edit', 
                  'blogPage-delete',
                  'blogPage-publish',
                  'blogPage-unPublish',

                  'problemPage-list', 
                  'problemPage-view', 
                  'problemPage-create', 
                  'problemPage-edit', 
                  'problemPage-delete',
                  'problemPage-publish',
                  'problemPage-unPublish',

                  'categoryPage-list', 
                  'categoryPage-view', 
                  'categoryPage-create', 
                  'categoryPage-edit', 
                  'categoryPage-delete',
                  'categoryPage-publish',
                  'categoryPage-unPublish',

                  'contactUsPage-list', 
                  'contactUsPage-view', 
                  'contactUsPage-create', 
                  'contactUsPage-edit', 
                  'contactUsPage-delete',
                  'contactUsPage-publish',
                  'contactUsPage-unPublish',

                  'simplePage-list', 
                  'simplePage-view', 
                  'simplePage-create', 
                  'simplePage-edit', 
                  'simplePage-delete',
                  'simplePage-publish',
                  'simplePage-unPublish',

                  
                  'comments-list', 
                  'comments-view', 
                  'comments-create', 
                  'comments-edit', 
                  'comments-delete',

                  'feedback-list', 
                  'feedback-view', 
                  'feedback-create', 
                  'feedback-edit', 
                  'feedback-delete',

                  'audit-list', 
                  'audit-view', 
                  'audit-create', 
                  'audit-edit', 
                  'audit-delete',

                  'log-list', 
                  'log-view', 
                  'log-create', 
                  'log-edit', 
                  'log-delete',

                  'settings-list',
                  'settings-create',
            ];
        
            foreach ($permissions as $permission) {
                  Permission::create(['name' => $permission]);
            }
      }
}