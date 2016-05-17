@extends('layouts.ethos') 

@section('menubar')
	@include('bar.partials.menubar_second')
@stop

@section('header')
	
	@include('bar.partials.header')
	
@stop

@section('footer')
	@include('bar.partials.footer')
@stop

@section('content')
	
	<div id="second"
	class="x-content-band text-white center-text bg-image parallax man"
	data-x-element="content_band"
	data-x-params='
		{"type":"image","parallax":false}
		'
	style="background-image: url({!! $fondo_eventos !!}); background-color: #f8f8f8; padding-top: 0px; padding-bottom: 190px;">

	
	<div class="x-container max width" style="margin-top: 100px; margin-bottom:20px">
		<h2 class="h-custom-headline h2"
			style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
			<span>{!! $evento->title !!}</span>
		</h2>
		
		
	</div>
	
	<div class="x-container width">
	@if(!is_null($evento->imagen))
		<hr class="x-gap" style="margin: 20px 0 0 0;">
			<div class="x-video-inner">
		<img class="embed with-container evento-image" style=""
							src="{!! asset($evento->imagen) !!}"
							frameborder="0" allowfullscreen></img>
		
	</div>
	@endif
		
		
		
	<hr class="x-gap" style="margin: 15px 0 0 0;">
	<div style="font-weight: 600;font-size: medium; background-color: #000000;">{!! $evento->texto_h !!}
	</div>

<p>
	
	
	</div>
</div>

@stop 

@section('scripts') 

@stop

@section('styles') 

@stop
