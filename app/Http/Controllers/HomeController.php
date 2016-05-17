<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Maiklez\MaikBlog\Models\Post;
use Maiklez\MaikBlog\Models\Category;
use Maiklez\MaikBlog\Models\Tag;

use Auth;
use Maiklez\Multimedia\Models\Evento;
use Maiklez\Multimedia\Models\Album;

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
    	//$posts = Post::orderBy('created_at', 'desc')->paginate(5);
    
    	$eventos = Evento::orderBy('fecha_inicio', 'asc')->limit(3)->get();
//     	return view('bar', [
//     			'posts' => $posts,
//     	]);

    	$title = "O Alfaiate";
    	$logo_image = asset ( '/logo.png' );
    	$fondo_image = asset ( '/img/alfaiate_fondo1.jpg' );
    	$logo_frase = "Un lugar onde falar...";
    	
    	$fondo_ubicacion = asset ( '/img/fondo2.jpg' );
    	$fondo_eventos = asset ( '/img/alfaiate_paredchica.jpg' );
    	
    	
    	
    	$albumes = Album::where('publicar', 1)->limit(6)->get();
    	$albumes->push(Album::where('publicar', 1)->first());
    	$albumes->push(Album::where('publicar', 1)->first());
    	$albumes->push(Album::where('publicar', 1)->first());

    	$fondo_multimedia = asset ( '/img/alfaiate_paredrevistas.jpg' );
    	
    	    	
    	
    	//$tipo='elmaster  masthead-stacked';
    	$tipo='masthead-inline';
    	
    	return view ( 'bar', compact ( 'tipo', 'title', 'eventos','logo_image', 'fondo_image', 'logo_frase', 'fondo_ubicacion',
    			'fondo_eventos', 'albumes', 'fondo_multimedia' ) );
    }
    
    /**
     * Show the eventos.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEventos()
    {

    	$eventos = Evento::orderBy('fecha_inicio', 'desc')->get();
    
    	$title = "O Alfaiate";
    	$logo_image = asset ( '/logo.png' );
    	
    	
    	$fondo_eventos = asset ( '/img/alfaiate_paredchica.jpg' );

    	//$tipo='elmaster  masthead-stacked';
    	$tipo='masthead-inline';
    	 
    	return view ( 'bar.eventos.eventos', compact ( 'tipo', 'title', 'eventos','logo_image',
    			'fondo_eventos' ) );
    }
    
    /**
     * Show the eventos.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvento($id)
    {
    
    	$evento = Evento::find($id);
    
    	$title = "O Alfaiate";
    	$logo_image = asset ( '/logo.png' );
    	 
    	 
    	$fondo_eventos = asset ( '/img/alfaiate_paredchica.jpg' );
    
    	//$tipo='elmaster  masthead-stacked';
    	$tipo='masthead-inline';
    
    	return view ( 'bar.eventos.evento', compact ( 'tipo', 'title', 'evento','logo_image',
    			'fondo_eventos' ) );
    }
    
    /**
     * Show the albumes.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAlbumes()
    {
    	
    	$title = "O Alfaiate";
    	$logo_image = asset ( '/logo.png' );

    	$albumes = Album::where('publicar', 1)->get();
    	 
    
    	$fondo_multimedia = asset ( '/img/alfaiate_paredrevistas.jpg' );

    	//$tipo='elmaster  masthead-stacked';
    	$tipo='masthead-inline';
    	 
    	return view ( 'bar.albumes.albumes', compact ( 'tipo', 'title', 'logo_image',
    			'albumes', 'fondo_multimedia' ) );
    }
    
    /**
     * Show the albumes.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAlbum($id)
    {
    	 
    	$title = "O Alfaiate";
    	$logo_image = asset ( '/logo.png' );
    
    	$album = Album::find($id);
    
    
    	$fondo_multimedia = asset ( '/img/alfaiate_paredrevistas.jpg' );
    
    	//$tipo='elmaster  masthead-stacked';
    	$tipo='masthead-inline';
    
    	return view ( 'bar.albumes.album', compact ( 'tipo', 'title', 'logo_image',
    			'album', 'fondo_multimedia' ) );
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
}
