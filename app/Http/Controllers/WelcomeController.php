<?php namespace Blog\Http\Controllers;

use Blog\Post;

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

	public function index()
	{
		$posts = \DB::table('posts')->orderBy('id','desc')->paginate(4);

		return view('welcome')
		->with('posts',$posts);

	}

	public function article($slug)
	{
		$post = Post::findBySlug($slug);

		return view('article')
			   ->with('post',$post);
	}

	public function tags($tag){

		$posts = Post::where('tags', 'LIKE', '%'.$tag.'%')->get();

		return view('tags')
			->with('posts', $posts)
			->with('tag', $tag);
	}

	public function videos()
	{
		$videos = \DB::table('videos')->orderBy('id','desc')->paginate(4);

		return view('video')
			->with('videos',$videos);

	}

}
