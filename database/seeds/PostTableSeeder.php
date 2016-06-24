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
        for ($i=0 ; $i<40 ; $i++) {
            $id = \DB::table('posts')->insertGetId(array(

                'title'       => $faker->catchPhrase,

                'content'     => $faker->paragraph(rand(5,9)),

                'description' => $faker->paragraph(rand(2,5)),

                'photo'       => $faker->imageUrl($width = 640, $height = 480)

            ));
        }
    }
}
