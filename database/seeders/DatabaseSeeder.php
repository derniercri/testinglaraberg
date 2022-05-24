<?php

namespace Database\Seeders;

use App\Models\Age;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use VanOns\Laraberg\Models\Gutenbergable;

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
                'slug' => 'Histoires pour les bébés',
            ],
            [
                'title' => 'young-children',
                'slug' => 'Histoires pour les jeunes enfants',
            ],
            [
                'title' => 'children',
                'slug' => 'Histoires pour les  enfants plus grands',
            ],
            [
                'title' => 'pre-teen',
                'slug' => 'Histoires pour les pré-adolescents',

            ],
            [
                'title' => 'teenager',
                'slug' => 'Histoires pour les adolescents',
            ],
        ]);

//      categories
        Category::insert([
            [
                'title' => 'super-heroes',
                'slug' => 'histoires de super-héros',
            ],
            [
                'title' => 'princess-and-dragons',
                'slug' => 'histoires de princesse et de dragon',
            ],
            [
                'title' => 'cute-animals',
                'slug' => 'histoires d\'animaux mignons',
            ],
            [
                'title' => 'real-stories',
                'slug' => 'histoires réelles',
            ],
            [
                'title' => 'nature-and-animals',
                'slug' => 'histoires de nature et d\'animaux',
            ],
        ]);
    }
}
