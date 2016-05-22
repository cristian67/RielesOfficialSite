<?php
use Blog\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 2/3/16
 * Time: 15:40
 */
class SongTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i=0 ; $i<25 ; $i++) {
            $id = \DB::table('songs')->insertGetId(array(

                'title'       => $faker->firstName,

                'description' => $faker->firstName,

                'url'         => $faker->lastName,

                'lyrics'      => $faker->lastName,

                'cash'        => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
            ));


        }
    }
}


