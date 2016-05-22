<?php

use Blog\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 13/2/16
 * Time: 21:43
 */

class PostTableSeeder extends Seeder
{
    public function run()
    {

        $faker = Faker::create();
        for ($i=0 ; $i<50 ; $i++) {
            $id = \DB::table('posts')->insertGetId(array(

                'title'       => $faker->catchPhrase,

                'content'     => $faker->paragraph(rand(5,9)),

                'description' => $faker->paragraph(rand(2,5)),

                'photo'       => $faker->imageUrl($width = 640, $height = 480)

            ));

            \DB::table('tags')->insert(array(

                'posts_id_2' => $id,
                'tags'     => $faker->word

            ));

        }
    }
}
