@extends('layouts/ethos') 

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
	
	<div id="videos"
	class="x-content-band text-white center-text bg-image parallax man"
	data-x-element="content_band"
	data-x-params='
		{"type":"image","parallax":false}
		'
	style="background-image: url({!! $fondo_multimedia !!}); background-color: #f8f8f8; padding-top: 0px; padding-bottom: 190px;">

	
	<div class="x-container max width" style="margin-top: 100px; margin-bottom:20px">
		<h2 class="h-custom-headline h2"
			style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
			<span>{!! $album->title !!}</span>
		</h2>
		
		
	</div>
	
	


<div class="x-column x-sm x-1-1" style="margin-bottom: 40px;  opacity: 1; background-color: rgb(0, 0, 0);" data-x-element="column" data-x-params="{&quot;fade&quot;:true,&quot;animation&quot;:&quot;in-from-left&quot;}" data-fade="true">
			
			<div class="eventtext">{!! $album->texto_h !!}</div>
		
</div>




	<div class="x-container width">
		<hr class="x-gap" style="margin: 45px 0 0 0;">
		<?php $i=0 ?>
		@foreach ($album->resources as $resource)	
			
			@if($i==2)				
				<div class="x-column x-sm x-1-3 last" style="">
			@else
				<div class="jajajaja x-column x-sm x-1-3" style="">
			@endif
						
			<div class=" embed with-container"><div class="x-video-inner">
			<a href="{!! asset($resource->link) !!}"><img style="max-width: 100%; "
				src="{!! asset($resource->link) !!}" 
				frameborder="0" allowfullscreen></img></a>

</div></div>	
				
			</div>
			
			@if($i<>2)
				<div class="x-visibility x-visible-phone">
					<hr class="x-gap" style="margin: 45px 0 0 0;">
				</div>
				<?php $i++; ?>
			@else
				<?php $i=0; ?>
			@endif
				
			
		@endforeach		

	</div>
</div> 
	

@stop 

@section('scripts') 

@stop

@section('styles') 

@stop
