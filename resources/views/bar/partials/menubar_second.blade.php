

<div class="x-navbar-wrap">
    <div class="x-navbar x-navbar-fixed-top">
      <div class="x-navbar-inner">
        <div class="x-container max width">

<div  class="x-logobar">      
	<h1 class="visually-hidden">{!! $title !!}</h1>
	<a  href="{!! url('') !!}" class="x-brand text" title="{!! $title !!}">
	<img src="{!! $logo_image !!}"  alt=""  style=" position: absolute; height: 80px;  margin-top: -12px;"></a>      
</div>

<a href="#" class="x-btn-navbar collapsed" data-toggle="collapse" data-target=".x-nav-wrap.mobile">
  <i class="x-icon-bars" data-x-icon="&#xf0c9;"></i>
  <span class="visually-hidden">Navigation</span>
</a>

<nav class="x-nav-wrap desktop" role="navigation">
  <ul id="menu-primary" class="x-nav">
  
<li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page {{ (Request::is('/') ? ' current-menu-item' : '') }}"><a href="{!!url('') !!}"><span>Home</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page {{ (Request::is('fiestas*') ? ' current-menu-item' : '') }}"><a href="{!! route('fiestas') !!}"><span>Eventos</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page {{ (Request::is('fotos*') ? ' current-menu-item' : '') }}"><a href="{!! route('fotos') !!}"><span>Multimedia</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="{!! route('index') !!}#ubicacion"><span>Ubicacion</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="{!! url('') !!}#contacto"><span>Contacto</span></a></li>
</ul></nav>

<div class="x-nav-wrap mobile collapse">
  <ul id="menu-primary-1" class="x-nav">
  
<li class="menu-item menu-item-type-post_type menu-item-object-page   menu-item-97"><a href="{!!url('') !!}"><span>Home</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="{!! route('fiestas') !!}"><span>Eventos</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="{!! route('fotos') !!}"><span>Multimedia</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="{!! route('index') !!}#ubicacion"><span>Ubicacion</span></a></li>
<li id="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104"><a href="{!! url('') !!}#contacto"><span>Contacto</span></a></li>
</ul></div>        </div>
      </div>
    </div>
  </div>