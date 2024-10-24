<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Comment as CommentModel;
use App\Models\Post as PostModel;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //inisialisasi
        $faker = Faker::create('id_ID');

        // ambil semua data post untuk dihubungkan ke comment
        $post = PostModel::all();

        //loop data comment 50 untuk tiap post secara random
        for($i=0;$i<50;$i++) {
            CommentModel::create([
                'post_id' => $post->random()->id,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
