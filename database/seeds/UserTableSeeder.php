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

            'rol'        => 'admin',

            'email'      => 'a@gmail.com',

            'password'   => \Hash::make('secret')


        ));


        $faker = Faker::create();
        for ($i=0 ; $i<4 ; $i++) {
            $id = \DB::table('users')->insertGetId(array(

                'first_name' => $faker->firstName,

                'last_name'  => $faker->lastName,

                'username'   => $faker->unique()->userName,

                'rol'        => 'common',

                'email'      => $faker->email,

                'password'   => \Hash::make('123456')

            ));

        }
    }
}

