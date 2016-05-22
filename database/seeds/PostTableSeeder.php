<?php

use Blog\Post;
use Illuminate\Database\Seeder;

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
        Post::create(
            [
                'title'       => 'Mi Primer post',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'content'     => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.',
                'tags'        => 'Laravel,Tutorial,curso,2016',
                'photo'       => 'https://manuais.iessanclemente.net/images/b/be/Laravel-5.png',
                'video'       => ''
            ]
        );

        Post::create(
            [
                'title'   => 'Segundo post',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum nisl ut congue consectetur. In hac habitasse platea dictumst. Donec mi ex, sagittis vitae pharetra id, laoreet eget massa. Quisque dignissim dapibus nulla vitae feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis consectetur velit. Sed iaculis interdum ipsum, et ullamcorper ligula maximus ut. Cras tempus id lorem tempor pretium. Ut in condimentum magna. Nam mollis magna sem, volutpat laoreet mauris ultricies non. Donec at porta erat. Duis iaculis pretium erat non fringilla.
Maecenas non nibh mollis, luctus nibh et, rutrum elit. Quisque laoreet nunc id tellus gravida, ut posuere neque gravida. Nulla a consectetur arcu. Aliquam erat volutpat. Aenean scelerisque ultrices mauris at lobortis. Quisque lobortis vitae velit a posuere. Morbi semper elementum pretium. Praesent in sem vitae enim posuere ullamcorper. Fusce fringilla libero quis quam commodo, a pellentesque orci pellentesque. Integer lobortis placerat ante, non sagittis augue euismod vitae. Sed ut congue nisl. Aliquam ultricies nulla eu mollis vulputate. Sed quis ex cursus, finibus erat vel, fringilla purus. Duis at sapien a neque rutrum vestibulum iaculis eu elit. Suspendisse semper, lorem id feugiat consectetur, dui ligula pellentesque eros, quis placerat arcu tortor vitae urna. ',
                'tags'    => 'Laravel,Tutorial,curso,2016',
                'photo'   => 'http://codecampsdq.com/wp-content/uploads/2016/01/laravel.jpg',
                'video'       => 'https://www.youtube.com/embed/4WRbtU1ekeY'
            ]
        );

        Post::create(
            [
                'title'  => 'El primero Repetido',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'content'=> 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.',
                'tags'   => 'Laravel,Tutorial,2016',
                'photo'  => 'https://manuais.iessanclemente.net/images/b/be/Laravel-5.png',
                'video'  => ''
            ]
        );
    }
}
