<?php
use Blog\Video;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 2/3/16
 * Time: 15:40
 */
class VideoTableSeeder extends Seeder
{
    public function run()
    {
        Video::create(
            [
                'video' => 'https://www.youtube.com/embed/S7DVADCjN_w'
            ]
        );

        Video::create(
            [
                'video' => 'https://www.youtube.com/embed/4WRbtU1ekeY'
            ]
        );

        Video::create(
            [
                'video' => 'https://www.youtube.com/embed/vWx531QWQJo'
            ]
        );
    }
}


