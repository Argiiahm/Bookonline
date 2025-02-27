<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(15)->create();

        // User::create([
        //     "name" => "Argii",
        //     "email" => "argii22@gmail.com",
        //     "password" => bcrypt('123')
        // ]);

        // User::create([
        //     "name" => "Galuh",
        //     "email" => "Galuh@gmail.com",
        //     "password" => bcrypt('123')
        // ]);
        // User::create([
        //     "name" => "Sheira",
        //     "email" => "Sheira@gmail.com",
        //     "password" => bcrypt('123')
        // ]);

        Book::factory(40)->create();

        // Book::create([
        //     "nama_buku" => "The Imposible",
        //     "jumlah_halaman" => 5,
        //     "slug" => "the-imposible",
        //     "Category_id" => 1,
        //     "User_id" => 1
        // ]);
        // Book::create([
        //     "nama_buku" => "Succes Mind",
        //     "jumlah_halaman" => 7,
        //     "slug" => "success-mind",
        //     "Category_id" => 1,
        //     "User_id" => 1
        // ]);
        // Book::create([
        //     "nama_buku" => "24 Hours",
        //     "jumlah_halaman" => 4,
        //     "slug" => "24-hours",
        //     "Category_id" => 1,
        //     "User_id" => 2
        // ]);

        // Book::create([
        //     "nama_buku" => "Last Minute",
        //     "jumlah_halaman" => 4,
        //     "slug" => "last-minute",
        //     "Category_id" => 1,
        //     "User_id" => 3
        // ]);
        // Book::create([
        //     "nama_buku" => "Basic HTML & CSS",
        //     "jumlah_halaman" => 5,
        //     "slug" => "basic-html&css",
        //     "Category_id" => 2,
        //     "User_id" => 1
        // ]);
        // Book::create([
        //     "nama_buku" => "The Avengers",
        //     "jumlah_halaman" => 6,
        //     "slug" => "comic-theAvengers",
        //     "Category_id" => 3,
        //     "User_id" => 3
        // ]);

        Category::create([
            "jenis" => "Motivasi",
            "slug" => "motivasi"
        ]);
        Category::create([
            "jenis" => "Coding",
            "slug" => "coding"
        ]);
        Category::create([
            "jenis" => "Comic",
            "slug" => "comic"
        ]);
        Category::create([
            "jenis" => "Makanan",
            "slug" => "makanan"
        ]);
        Category::create([
            "jenis" => "Desain",
            "slug" => "desain"
        ]);
        Category::create([
            "jenis" => "Football",
            "slug" => "football"
        ]);
    }
}
