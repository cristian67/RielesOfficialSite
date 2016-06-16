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
class GaleriaTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();
        for ($i=0 ; $i<9 ; $i++) {

            $id = \DB::table('galerias')->insertGetId(array(

                'title'       => $faker->catchPhrase,

                'description' => $faker->paragraph(rand(2,5)),

                'photo'         => $faker->imageUrl($width = 640, $height = 480),

                'type'        => 'imagen'

            ));
        }
    }
}


