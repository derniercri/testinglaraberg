<?php

namespace Database\Seeders;

use App\Models\Age;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Post::factory(50)->create();
         User::factory(10)->create();


//        1 admin
        //TODO - create priviliege for admin user and assign it to admin user
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'role' => 'user',
            ],
        ]);

//        ages
        Age::insert([
            [
                'title' => 'Babies',
            ],
            [
                'title' => 'young-children',
            ],
            [
                'title' => 'children',
            ],
            [
                'title' => 'pre-teen',
            ],
            [
                'title' => 'teenager',
            ],
        ]);

//      categories
        Category::insert([
            [
                'title' => 'super-heroes',
            ],
            [
                'title' => 'princess-and-dragons',
            ],
            [
                'title' => 'cute-animals',
            ],
            [
                'title' => 'real-stories',
            ],
            [
                'title' => 'nature-and-animals',
            ],
        ]);
    }
}
