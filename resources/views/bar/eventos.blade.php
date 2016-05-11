<div id="second"
	class="x-content-band center-text text-white bg-image parallax man"
	style=" background-color: #f8f8f8; padding-top: 65px; padding-bottom: 0;">
	<div class="x-container max width">
		<div class="x-column x-sm x-1-1 last" style="">
			<div class="x-container max width">
				<h2 class="h-custom-headline h2"
					style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
					<span>Próxima Programación</span>
				</h2>
				
			</div>
		</div>
	</div>
</div>
<div id="x-content-band-3"
	class="x-content-band center-text text-white bg-image parallax man"
	style=" background-color: #f8f8f8; padding-top: 35px; padding-bottom: 65px;">
	
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
