<?php
use Blog\Feed;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 13/2/16
 * Time: 22:26
 */
class FeedTableSeeder extends Seeder
{
    public function run()
    {
        Feed::create(
            [
                'usuario' => 'Mi Primer post',
                'content' => 'hola q mierda es esto'

            ]
        );

        FeeD::create(
            [
                'usuario' => 'Mi Primer post',
                'content' => 'Bro tus tutos son mierda pura'

            ]
        );


    }
}