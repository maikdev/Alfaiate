<div id="second"
	class="x-content-band center-text text-white bg-image parallax man"
	data-x-element="content_band"
	data-x-params='
		{"type":"image","parallax":false}
		'
	style="background-image: url({!! $fondo_eventos !!}); background-color: #f8f8f8;  padding-bottom: 200px;"
	>
	<div class="x-container max width" style="margin-top: 65px;">
		<a href="{!! route('fiestas') !!}"><h2 class="h-custom-headline h2"
			style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
			<span>Próxima Programación</span>
		</h2></a>
		
		<?php $i=1; ?>
		@foreach ($eventos as $evento)
			
			@include('bar.home.evento', [$evento, $i])
			<?php $i++; ?>
		@endforeach
	</div>
</div>


