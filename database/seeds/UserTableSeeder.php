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
                'name' => 'cristian',
                'email' => 'rieles@mail.com',
                'username' => 'cristian67',
                'password' => \Hash::make('secret')
            ]
        );
    }
}

