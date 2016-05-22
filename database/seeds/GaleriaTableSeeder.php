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
        for ($i=0 ; $i<50 ; $i++) {

            $id = \DB::table('multimedias')->insertGetId(array(


                'description' => $faker->paragraph(rand(2,5)),

                'url'         => $faker->imageUrl($width = 640, $height = 480)

            ));

            \DB::table('types_multimedia')->insert(array(

                'multimedias_id_2' => $id,
                'type'             => 'imagen'

            ));

            $id_1 = \DB::table('galerias')->insertGetId(array(

                'title'            => $faker->catchPhrase,

                'description'      => $faker->imageUrl($width = 640, $height = 480),

                'multimedias_id_3' => $id,

            ));

             \DB::table('types_galerias')->insertGetId(array(

                'galerias_id' => $id_1,

                'type'        => 'imagen'

            ));

        }
    }
}


