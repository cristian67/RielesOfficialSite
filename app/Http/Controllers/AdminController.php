<?php namespace Blog\Http\Controllers;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Blog\Post;
use Blog\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller {

	//constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*Escritorio */
    public function desktop(){


        $posts = \DB::table('posts')->orderBy('id','desc')->paginate(10);
        return view('desktop')
            ->with('posts',$posts);
        }

    public function desktopVideo(){
        $videos = \DB::table('videos')->orderBy('id','desc')->paginate(10);
        return view('videosEdit')
            ->with('videos',$videos);
    }


    public function logout(){
        \Auth::logout();

        return \Redirect::route('home');
    }
/*Editando*/
    public function edit($id){
        $post = Post::find($id);

        return view('edit')
            ->with('post',$post);
    }

    public function videosEdit($id){
        $video = Video::find($id);

        return view('videosEdit')
            ->with('video',$video);

    }

    public function refresh($id){

        $p = Post::find($id);

        $p->title = \Input::get('title');
        $p->content = \Input::get('content');
        $p->description = \Input::get('description');
        $p->tags = \Input::get('tags');
        $p->photo = \Input::get('photo');
        $p->video = \Input::get('video');
        $p->resluggify();

        $p->save();

        return \Redirect::route('adminsite');

    }
    /*Creando */
    public function nuevo(){

        return view('nuevo');
    }

    public function crear(){

        $p = new Post;

        $p->title = \Input::get('title');
        $p->content = \Input::get('content');
        $p->description = \Input::get('description');
        $p->tags = \Input::get('tags');
        $p->photo = \Input::get('photo');
        $p->video = \Input::get('video');

        $p->save();

        return \Redirect::route('adminsite')
            ->with('alert','Tu publicacion fue creada con éxito');
    }
    /*Borrando */
    public function delete($id){

        $post = Post::find($id)->delete();


        return \Redirect::route('adminsite');
    }

}
