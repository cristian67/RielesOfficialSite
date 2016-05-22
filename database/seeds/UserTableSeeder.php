<?php
use Blog\User;
use Illuminate\Database\Seeder;

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
        User::create(
            [
                'name' => 'John Doe',
                'email' => 'a@mail.com',
                'username' => 'JonyPerroQl',
                'password' => \Hash::make('secret')
            ]
        );
    }
}

