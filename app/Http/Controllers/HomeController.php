<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Maiklez\MaikBlog\Models\Post;
use Maiklez\MaikBlog\Models\Category;
use Maiklez\MaikBlog\Models\Tag;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Show the posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
    	$posts = Post::orderBy('created_at', 'desc')->paginate(5);
    
    
//     	return view('bar', [
//     			'posts' => $posts,
//     	]);

    	$title = "O'Alfaiate";
    	$logo_image = asset ( '/logo.png' );
    	$fondo_image = asset ( '/img/alfaiate_fondo1.jpg' );
    	$logo_frase = "Un lugar onde falar...";
    	
    	$fondo_temazos = asset ( '/img/bar/fondo_eventos.jpg' );
    	$fondo_eventos = asset ( '/img/bar/fondo_eventos.jpg' );
    	
    	$video1 = ['link' => 'https://www.youtube-nocookie.com/embed/WXT6rIgu65o?rel=0',
    			'titulo'=>'tit',
    			'texto' => 'texto'
    	];
    	
    	$videos = [];
    	
    	array_push($videos, $video1);
    	array_push($videos, $video1);
    	array_push($videos, $video1);
    	
    	
    	
    	$fondo_multimedia = asset ( '/img/bar/fondo_multimedia.jpg' );
    	
    	$concierto1 = [
    			'imagen' => asset ( '/img/negadeth/cso.jpg' ),
    			'titulo'=>'Directo Potente',
    			'texto' => '',
    			'lugar'=>'CSO Palavea',
    			'fecha' => '05/05/2012'
    	];
    	
    	$conciertos = [];
    	array_push($conciertos, $concierto1);
    	array_push($conciertos, $concierto1);
    	array_push($conciertos, $concierto1);
    	
    	
    	//$tipo='elmaster  masthead-stacked';
    	$tipo='masthead-inline';
    	
    	return view ( 'bar', compact ( 'tipo', 'title', 'logo_image', 'fondo_image', 'logo_frase', 'fondo_temazos',
    			'fondo_eventos', 'videos', 'fondo_multimedia', 'conciertos' ) );
    }
    
    /**
     * Show one post
     *
     * @return \Illuminate\Http\Response
     */
    public function the_post($slug)
    {
    	$post = Post::where('slug', 'like',$slug)->first();
    
    
    	return view('one_post', [
    			'post' => $post,
    			'comments' => $post->comments,
    	]);
    }
    
    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
    	$this->authorize('blog',  Auth::user());
    
    	$this->validate($request, Post::storeRules());
    
    	$this->validate($request, Category::storeRules());
    	$this->validate($request, Tag::storeRules());
    	
    	\DB::transaction(function () use ($request){
    		$post = Post::create(Post::storeAttributes($request));
    		
    		$categories = explode(',', $request->categories);
    		// remove empty items from array
    		$categories = array_filter($categories);
    		// trim all the items in array
    		$categories =array_map('trim', $categories);
    		
    		$post->saveCategories($categories);   		 
    		
    		$tags = explode(',', $request->tags);
    		
    		// remove empty items from array
    		$tags = array_filter($tags);
    		// trim all the items in array
    		$tags =array_map('trim', $tags);
    		
    		$post->saveTags($tags);
    		    		
    		
    	});
    	
    
    
    	return redirect(route('blog'));
    }
}
