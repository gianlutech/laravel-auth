<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->title = $faker->text(20);
            $post->content = $faker->paragraph(6, true);
            $post->image = $faker->imageUrl(50, 50);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
