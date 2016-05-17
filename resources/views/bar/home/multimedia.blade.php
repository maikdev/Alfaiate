<!-- conciertos -->


<div id="videos"
	class="x-content-band text-white center-text bg-image parallax man"
	data-x-element="content_band"
	data-x-params='
		{"type":"image","parallax":false}
		'
	style="background-image: url({!! $fondo_multimedia !!}); background-color: #f8f8f8; padding-top: 0px; padding-bottom: 190px; background-position: 50% 0px;">

	
	<div class="x-container max width" style="margin-top: 100px; margin-bottom:20px">
		<a href="{!! route('fotos') !!}"><h2 class="h-custom-headline h2"
			style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
			<span>Multimedia</span>
		</h2></a>
		
		
	</div>
	
	<div class="x-container width">
		
		<?php $i=0 ?>
		@foreach ($albumes as $album)	
			
			@if($i==2)				
				<div class="x-column x-sm x-1-3 last" style="">
			@else
				<div class="jajajaja x-column x-sm x-1-3" style="">
			@endif
						
			@include('bar.home.albumcontainer', $album)			
				
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