@extends('layouts/ethos') 

@section('menubar')
	@include('bar.partials.menubar')
@stop

@section('header')
	
	@include('bar.partials.header')
	
@stop

@section('footer')
	@include('bar.partials.footer')
@stop

@section('content')
	
	
	@include('bar.partials.animated_intro')
		
	@include('bar.home.eventos')	
	
	@include('bar.home.multimedia')
	
	@include('bar.home.ubicacion')
	
	@include('bar.home.contacto') 

@stop 

@section('scripts') 

@stop

@section('styles') 

@stop
