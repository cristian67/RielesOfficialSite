<?php
use Blog\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 13/2/16
 * Time: 22:02
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $id = \DB::table('users')->insertGetId(array(

            'first_name' => 'Cristian',

            'last_name'  => 'Avilés',

            'username'   => 'cristian67',

            'password'   => \Hash::make('secret')


        ));

        \DB::table('emails')->insert(array(

            'user_id_3' => $id,
            'email'     => 'a@gmail.com'

        ));

        \DB::table('rols')->insert(array(

            'user_id' => $id,
            'type'    => 'admin'

        ));

        $faker = Faker::create();
        for ($i=0 ; $i<4 ; $i++) {
            $id = \DB::table('users')->insertGetId(array(

                'first_name' => $faker->firstName,

                'last_name'  => $faker->lastName,

                'username'   => $faker->unique()->userName,

                'password'   => \Hash::make('123456')


            ));

            \DB::table('emails')->insert(array(

                'user_id_3' => $id,
                'email'     => $faker->unique()->email

            ));

            \DB::table('rols')->insert(array(

                'user_id' => $id,
                'type'    => 'common'

            ));



        }
    }
}

