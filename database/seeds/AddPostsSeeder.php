<?php

use Illuminate\Database\Seeder;
use App\Post;

class AddPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Заголовок поста 1';
        $post->text = 'Какой-то длинный текст вдыллар ывлпр влоарп ылвдп hsdlk';
        $post->user_id = 0;
        $post->save();
    }
}
