<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post as PostModel;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //inisialisasi dengan faker BIndo
        $faker = Faker::create('id_ID');

        //mengisi data sebanyak 20 data fake
        for($i = 0; $i < 20; $i++) {
            //insert into post values
            PostModel::create([
                'title' => $faker->sentence, //judul post bahasa Indonesia
                'body' => $faker->paragraph, //isi post bahasa indonesia

            ]);
        }
    }
}
