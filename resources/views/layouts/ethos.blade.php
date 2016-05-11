@extends('layouts.x_theme')


@section('style_plugin')
<style id='rs-plugin-settings-inline-css' type='text/css'>
	.tp-caption.big_lato{font-family:Lato,"Helvetica Neue",Helvetica,sans-serif; font-size:274px; font-weight:100; letter-spacing:0; line-height:1; text-align:center; text-transform:uppercase; color:#fff}.tp-caption.big_lato .char-1{letter-spacing:-0.05em}.tp-caption.big_lato .char-2{letter-spacing:-0.0925em}.tp-caption.big_lato .char-3{letter-spacing:-0.135em}.tp-caption.big_lato .char-4{letter-spacing:-0.0925em}.tp-caption.title_3{font-family:Oswald,"Helvetica Neue",Helvetica,sans-serif; font-size:124px; font-weight:300; letter-spacing:0; line-height:1; text-align:center; text-transform:uppercase; color:#fff}.tp-caption.paragraph_3{font-family:Oswald,"Helvetica Neue",Helvetica,sans-serif; font-size:72px; font-weight:300; letter-spacing:0; line-height:1.1; text-align:center; text-transform:uppercase; color:#fff}.tp-caption.paragraph_3:before,.tp-caption.paragraph_3:after{content:""; position:absolute; left:10%; right:10%; display:block; height:2px; background-color:rgba(255,255,255,0.25)}.tp-caption.paragraph_3:before{top:-20px}.tp-caption.paragraph_3:after{bottom:-20px}
</style>
<link rel='stylesheet' id='x-font-custom-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C700%2C700italic%7CLato%3A700%7COswald%3A300%7COswald%3A300&#038;subset=latin%2Clatin-ext&#038;ver=4.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='tp-oswald-css'  href='http://fonts.googleapis.com/css?family=Oswald%3A300&#038;ver=4.2.2' type='text/css' media='all' />

<link rel='stylesheet' id='x-stack-css'  href="{!! asset('/css/renew/ethos.css?ver=4.0.4') !!}" type='text/css' media='all' />

@stop

@section('style_custom')
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="http://theme.co/x/demo/ethos/3/wp-content/plugins/js_composer/assets/css/vc-ie8.css" media="screen"><![endif]--><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><style id="x-customizer-css-output" type="text/css">a,h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,.x-breadcrumb-wrap a:hover,.x-comment-author a:hover,.x-comment-time:hover,.p-meta > span > a:hover,.format-link .link a:hover,.x-sidebar .widget ul li a:hover,.x-sidebar .widget ol li a:hover,.x-sidebar .widget_tag_cloud .tagcloud a:hover,.x-portfolio .entry-extra .x-ul-tags li a:hover{color:#dd3333;}a:hover{color:#9e2222;}a.x-img-thumbnail:hover{border-color:#dd3333;}.x-main{width:72%;}.x-sidebar{width:28%;}.x-content-sidebar-active .x-container.main:before{right:28%;}.x-sidebar-content-active .x-container.main:before{left:28%;}.x-full-width-active .x-container.main:before{left:-5000em;}.x-navbar .desktop .x-nav > li > a,.x-navbar .desktop .sub-menu a,.x-navbar .mobile .x-nav li > a,.x-breadcrumb-wrap a,.x-breadcrumbs .delimiter{color:#6b6b6b;}.x-topbar .p-info a:hover,.x-social-global a:hover,.x-navbar .desktop .x-nav > li > a:hover,.x-navbar .desktop .x-nav > .x-active > a,.x-navbar .desktop .x-nav > .current-menu-item > a,.x-navbar .desktop .sub-menu a:hover,.x-navbar .desktop .sub-menu .x-active > a,.x-navbar .desktop .sub-menu .current-menu-item > a,.x-navbar .desktop .x-nav .x-megamenu > .sub-menu > li > a,.x-navbar .mobile .x-nav li > a:hover,.x-navbar .mobile .x-nav .x-active > a,.x-navbar .mobile .x-nav .current-menu-item > a,.x-widgetbar .widget a:hover,.x-colophon .widget a:hover,.x-colophon.bottom .x-colophon-content a:hover,.x-colophon.bottom .x-nav a:hover{color:#ffffff;}.x-navbar .desktop .x-nav > li > a:hover,.x-navbar .desktop .x-nav > .x-active > a,.x-navbar .desktop .x-nav > .current-menu-item > a{box-shadow:0 2px 0 0 #dd3333;}.x-navbar .desktop .x-nav > li > a{height:60px;padding-top:22px;}.x-navbar-fixed-top-active .x-navbar-wrap{margin-bottom:2px;}.x-navbar .desktop .x-nav > li ul{top:62px;}.h-landmark,.x-sidebar .h-widget,.x-sidebar .h-widget a.rsswidget,.x-sidebar .h-widget a.rsswidget:hover,.x-sidebar .widget.widget_pages .current_page_item a,.x-sidebar .widget.widget_nav_menu .current-menu-item a,.x-sidebar .widget.widget_pages .current_page_item a:hover,.x-sidebar .widget.widget_nav_menu .current-menu-item a:hover{color:#000000;}.x-sidebar .widget,.x-sidebar .widget a,.x-sidebar .widget ul li a,.x-sidebar .widget ol li a,.x-sidebar .widget_tag_cloud .tagcloud a,.x-sidebar .widget_product_tag_cloud .tagcloud a,.x-sidebar .widget a:hover,.x-sidebar .widget ul li a:hover,.x-sidebar .widget ol li a:hover,.x-sidebar .widget_tag_cloud .tagcloud a:hover,.x-sidebar .widget_product_tag_cloud .tagcloud a:hover,.x-sidebar .widget_shopping_cart .buttons .button,.x-sidebar .widget_price_filter .price_slider_amount .button{color:#000000;}.x-sidebar .h-widget,.x-sidebar .widget.widget_pages .current_page_item,.x-sidebar .widget.widget_nav_menu .current-menu-item{border-color:#000000;}.x-topbar,.x-colophon.bottom{background-color:#000000;}.x-logobar,.x-navbar,.x-navbar .sub-menu,.x-colophon.top{background-color:#000000;}.x-post-slider{height:425px;}.archive .x-post-slider{height:425px;}.x-post-slider .x-post-slider-entry{padding-bottom:425px;}.archive .x-post-slider .x-post-slider-entry{padding-bottom:425px;}.x-brand,.x-brand:hover{color:#ffffff;}.format-link .link a,.x-portfolio .entry-extra .x-ul-tags li a{color:#8e8e8e;}.p-meta > span > a,.x-nav-articles a,.entry-top-navigation .entry-parent,.option-set .x-index-filters,.option-set .x-portfolio-filters,.option-set .x-index-filters-menu >li >a:hover,.option-set .x-index-filters-menu >li >a.selected,.option-set .x-portfolio-filters-menu > li > a:hover,.option-set .x-portfolio-filters-menu > li > a.selected{color:#000000;}.x-nav-articles a,.entry-top-navigation .entry-parent,.option-set .x-index-filters,.option-set .x-portfolio-filters,.option-set .x-index-filters i,.option-set .x-portfolio-filters i{border-color:#000000;}.x-nav-articles a:hover,.entry-top-navigation .entry-parent:hover,.option-set .x-index-filters:hover i,.option-set .x-portfolio-filters:hover i{background-color:#000000;}@media (max-width:979px){.x-navbar-fixed-top-active .x-navbar-wrap{margin-bottom:0;}.x-widgetbar{left:0;right:0;}.x-content-sidebar-active .x-container.main:before,.x-sidebar-content-active .x-container.main:before{left:-5000em;}body .x-sidebar .widget,body .x-sidebar .widget a,body .x-sidebar .widget a:hover,body .x-sidebar .widget ul li a,body .x-sidebar .widget ol li a,body .x-sidebar .widget ul li a:hover,body .x-sidebar .widget ol li a:hover{color:#8e8e8e;}body .x-sidebar .h-widget,body .x-sidebar .widget.widget_pages .current_page_item a,body .x-sidebar .widget.widget_nav_menu .current-menu-item a,body .x-sidebar .widget.widget_pages .current_page_item a:hover,body .x-sidebar .widget.widget_nav_menu .current-menu-item a:hover{color:#000000;}body .x-sidebar .h-widget,body .x-sidebar .widget.widget_pages .current_page_item,body .x-sidebar .widget.widget_nav_menu .current-menu-item{border-color:#000000;}}@media (max-width:767px){.x-post-slider,.archive .x-post-slider{height:auto !important;}.x-post-slider .x-post-slider-entry,.archive .x-post-slider .x-post-slider-entry{padding-bottom:65% !important;}}body{font-size:14px;font-style:normal;font-weight:300;color:#8e8e8e;background-color:#e4e4e4;}a:focus,select:focus,input[type="file"]:focus,input[type="radio"]:focus,input[type="submit"]:focus,input[type="checkbox"]:focus{outline:thin dotted #333;outline:5px auto #dd3333;outline-offset:-1px;}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-style:normal;font-weight:300;letter-spacing:-1px;text-transform:uppercase;}.w-h{font-weight:300 !important;}.x-container.width{width:88%;}.x-container.max{max-width:900px;}.x-main.full{float:none;display:block;width:auto;}@media (max-width:979px){.x-main.full,.x-main.left,.x-main.right,.x-sidebar.left,.x-sidebar.right{float:none;display:block;width:auto !important;}}.entry-header,.entry-content{font-size:14px;}.x-brand{font-style:normal;font-weight:300;letter-spacing:0px;text-transform:uppercase;}body,input,button,select,textarea{font-family:"Open Sans","Helvetica Neue",Helvetica,sans-serif;}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:"Oswald","Helvetica Neue",Helvetica,sans-serif;}.x-brand{font-family:"Oswald","Helvetica Neue",Helvetica,sans-serif;}.x-navbar .x-nav > li > a{font-family:"Lato","Helvetica Neue",Helvetica,sans-serif;}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a,.h1 a,.h2 a,.h3 a,.h4 a,.h5 a,.h6 a,blockquote{color:#000000;}.cfc-h-tx{color:#000000 !important;}.cfc-h-bd{border-color:#000000 !important;}.cfc-h-bg{background-color:#000000 !important;}.cfc-b-tx{color:#8e8e8e !important;}.cfc-b-bd{border-color:#8e8e8e !important;}.cfc-b-bg{background-color:#8e8e8e !important;}.x-navbar{font-size:14px;}body.x-navbar-fixed-top-active .x-navbar-wrap{height:60px;}.x-navbar-inner{min-height:60px;}.x-logobar-inner{padding-top:15px;padding-bottom:15px;}.x-brand{font-size:36px;font-size:3.6rem;}.x-navbar .x-brand{margin-top:13px;}.x-navbar .x-nav-wrap .x-nav > li > a{font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase;}.x-navbar .desktop .x-nav > li > a:not(.x-btn-navbar-woocommerce){padding-left:20px;padding-right:20px;}.x-navbar .desktop .x-nav > li > a > span{margin-right:-1px;}.x-btn-navbar{margin-top:13px;;}.x-btn-navbar,.x-btn-navbar.collapsed{font-size:28px;}@media (max-width:979px){body.x-navbar-fixed-top-active .x-navbar-wrap{height:auto;}}.x-btn,.button,[type="submit"]{color:#ffffff;border-color:#962222;background-color:#dd3333;margin-bottom:0.25em;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.5);box-shadow:0 0.25em 0 0 #490f0f,0 4px 9px rgba(0,0,0,0.75);border-radius:0.25em;}.x-btn:hover,.button:hover,[type="submit"]:hover{color:#ffffff;border-color:#962222;background-color:#ed3636;margin-bottom:0.25em;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.5);box-shadow:0 0.25em 0 0 #490f0f,0 4px 9px rgba(0,0,0,0.75);}.x-btn.x-btn-real,.x-btn.x-btn-real:hover{margin-bottom:0.25em;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.65);}.x-btn.x-btn-real{box-shadow:0 0.25em 0 0 #490f0f,0 4px 9px rgba(0,0,0,0.75);}.x-btn.x-btn-real:hover{box-shadow:0 0.25em 0 0 #490f0f,0 4px 9px rgba(0,0,0,0.75);}.x-btn.x-btn-flat,.x-btn.x-btn-flat:hover{margin-bottom:0;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.65);box-shadow:none;}.x-btn.x-btn-transparent,.x-btn.x-btn-transparent:hover{margin-bottom:0;border-width:3px;text-shadow:none;text-transform:uppercase;background-color:transparent;box-shadow:none;}</style>
<style id="x-customizer-css-custom" type="text/css">
      .text-white h2,
	.text-white p,
	.text-white .x-btn {
	  color: #fff;
	}
	
	.text-white .x-btn {
	  border-color: #fff;
	}
	
	.text-white .x-icon {
	  color: #fff;
	}
	
	.text-white .x-hr {
	  border-top-color: rgba(255, 255, 255, 0.1);
	}
	
	.text-white .x-btn:hover {
	  opacity: 0.75;
	}    
</style>
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

<script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

	<script type='text/javascript'>
/* <![CDATA[ */
var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
var _wpmejsSettings = {"pluginPath":"\/x\/demo\/ethos\/3\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>
<script type='text/javascript' src='http://theme.co/x/demo/ethos/3/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.16.2'></script>
	
@stop