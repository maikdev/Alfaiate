@extends('layouts.x_theme')


@section('style_plugin')

<link rel='stylesheet' id='x-font-custom-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C700%2C700italic%7CLato%3A700%7COswald%3A300%7COswald%3A300&#038;subset=latin%2Clatin-ext&#038;ver=4.0.4' type='text/css' media='all' />
<link href='https://fonts.googleapis.com/css?family=Aladin|Chicle' rel='stylesheet' type='text/css'>

<link rel='stylesheet' id='x-stack-css'  href="{!! asset('/css/renew/ethos.css?ver=4.0.4') !!}" type='text/css' media='all' />

@stop

@section('style_custom')
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="http://theme.co/x/demo/ethos/3/wp-content/plugins/js_composer/assets/css/vc-ie8.css" media="screen"><![endif]-->
<noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>




@stop

@section('top_site')

  <div id="top" class="site">

        <style scoped>
          .x-slider-scroll-bottom.above       { color: #ffffff;       }
          .x-slider-scroll-bottom.above:hover { color: #c6c6c6; }
        </style>

       

  
	@yield('header') 
    

	  <div id="contenido" class="x-main full" role="main">
	    <article id="post-5" class="post-5 page type-page status-publish hentry no-post-thumbnail">
	      <div class="entry-content">
	
	                  
	                  
	                  
			@yield('content')
	
	
	
	
	
	
	
	                  
	      </div>
	    </article>
	  </div>



  
    
	@yield('footer') 

  
    

  

  
  </div> <!-- END #top.site -->

@stop

@section('script_final')

<script src="{!!asset('js/classie.js')!!}"></script>
<script src="{!!asset('js/cbpAnimatedHeader.js')!!}"></script>

	

@stop