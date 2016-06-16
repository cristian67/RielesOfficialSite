<?php namespace Blog\Http\Controllers;

use Blog\Post;
use Blog\Song;
use phpDocumentor\Reflection\DocBlock\Tag;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

		/* Funcionando */
	public function index()
	{
		$posts = Post::orderBy('id','desc')->paginate(35);
		return view('welcome',compact('posts'));

	}

	public function biografia()
	{
		return view('bio');

	}

	public function audio()
	{
		$songs = Song::first()->select('title','lyrics','ruta','cash')->get();
		return view('audio')
			->with('songs',$songs);

	}
	public function contacto()
	{
		return view('contacto');

	}

	 //Funcionando
	public function article($slug)
	{
		$post = Post::findBySlug($slug);

		return view('article')
			->with('post',$post);
	}

	/* aun nope*/
	public function tags($tag){

		$post = Post::select('posts.*','tags.tags as tags')
                        ->where('tags.tags', 'LIKE', '%'.$tag.'%')
						->leftJoin('post_tag', 'posts.id', '=', 'post_tag.posts_2_id')
						->leftJoin('tags', 'post_tag.tags_2_id', '=', 'tags.id')
						->get();

		//return dd($post);

		return view('tags')
			->with('post',$post)
			->with('tag', $tag);
	}



	public function videos()
	{
		$videos = \DB::table('videos')->orderBy('id','desc')->paginate(4);

		return view('video')
			->with('videos',$videos);

	}

}
