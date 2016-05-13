<div id="second"
	class="x-content-band center-text text-white bg-image parallax man"
	data-x-element="content_band"
	data-x-params='
		{"type":"image","parallax":true}
		'
	style="background-image: url({!! $fondo_eventos !!}); background-color: #f8f8f8;  padding-bottom: 200px;"
	>
	<div class="x-container max width" style="margin-top: 65px;">
		<a href="{!! route('fiestas') !!}"><h2 class="h-custom-headline h2"
			style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
			<span>Próxima Programación</span>
		</h2></a>

		<div class="x-column x-sm x-1-2"
			style="background-color: #000000; padding-bottom: 40px; left: -3000px;"
			data-x-element="column"
			data-x-params="{&quot;fade&quot;:true,&quot;animation&quot;:&quot;in-from-left&quot;}"
			data-fade="true">
			
			
			<h2 class="h-custom-headline h2" style="
    margin-top: 30px;
    color: #fe8709;
    font-weight: 900;
">
				<a href="{!! route('fiestas') !!}"><span>{!! $evento->title !!}</span></a>
			</h2>
			
			
			
			<hr class="x-gap" style="margin: 20px 0 0 0;">
			<div class="eventtext">{!! $evento->texto_h !!}</div>
			
			
			
			<hr class="x-gap" style="margin: 5px 0 0 0;">

			
		</div>


		<div class="x-visibility x-visible-phone">
			<hr class="x-gap" style="margin: 20px 0 0 0;">
		</div>
		<div class="x-column x-sm x-1-2 last" style="right: -3000px;"
			data-x-element="column"
			data-x-params="{&quot;fade&quot;:true,&quot;animation&quot;:&quot;in-from-right&quot;}"
			data-fade="true">
			
			@if(!is_null($evento->imagen))
                	<div class="" style=" text-align: center;">
                		<a href="{!! route('fiestas') !!}"><img  alt="{!! $evento->title !!}" src="{!! asset($evento->imagen) !!}" style="  max-width: 430px;"></a>
                	</div>
	        @endif
			
			<br />
		</div>
	</div>
</div>


