<div id="videos"
	class="x-content-band center-text text-white bg-image parallax man"
	style="background-image: url({!! $fondo_image3 !!}); background-color: #f8f8f8; padding-top: 65px; padding-bottom: 0;">
	<div class="x-container max width">
		<div class="x-column x-sm x-1-1 last" style="">
			<div class="x-container max width">
				<h2 class="h-custom-headline h2"
					style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
					<span>Videos</span>
				</h2>
				<hr class="x-gap" style="margin: 20px 0 0 0;">
				<img class="man x-img x-img-thumbnail"
					src="{!! asset('img/f3video.jpg')!!}" alt="">
				<h3 class="h-custom-headline h3" style="color: white;">Presenta...</h3>
			</div>
		</div>
	</div>
</div>
<div id="x-content-band-3"
	class="x-content-band center-text text-white bg-image parallax man"
	style="background-image: url({!! $fondo_image3 !!}); background-color: #f8f8f8; padding-top: 35px; padding-bottom: 65px;">
	
	<div class="x-container width">
		
		<?php $i=0 ?>
		@foreach ($videos as $video)	
			
			@if($i==2)				
				<div class="x-column x-sm x-1-3 last" style="">
			@else
				<div class="jajajaja x-column x-sm x-1-3" style="">
			@endif
						
			@include('negadeth/videocontainer', $video)			
				
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
