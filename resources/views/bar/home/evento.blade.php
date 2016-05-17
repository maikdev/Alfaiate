@if($i%2==0)
	<div class="x-column x-sm x-1-2 row"
			style="left: -3000px;"
			data-x-element="column"
			data-x-params="{&quot;fade&quot;:true,&quot;animation&quot;:&quot;in-from-left&quot;}"
			data-fade="true">
			
			@if(!is_null($evento->imagen))
                	<div class="" style=" text-align: center;">
                		<a href="{!! route('fiestas') !!}"><img class="eventos-image" alt="{!! $evento->title !!}" src="{!! asset($evento->imagen) !!}" style=""></a>
                	</div>
	        @endif
			
				
	</div>		


	
	
	<div class="x-column x-sm x-1-2 last row" style="right: -3000px; background-color: #000000; padding-bottom: 40px; "
			data-x-element="column"
			data-x-params="{&quot;fade&quot;:true,&quot;animation&quot;:&quot;in-from-right&quot;}"
			data-fade="true">
			
			<h2 class="h-custom-headline h2" style="
    margin-top: 30px;
    color: #fe8709;
    font-weight: 900;
">
				<a href="{!! route('fiestas') !!}"><span>{!! $evento->title !!}</span></a>
			</h2>
			<hr class="x-gap" style="margin: 20px 0 0 0;">
			<div class="eventtext"><p>{!! $evento->fecha_inicio->format('\O l, d \d\e M ') !!} as {!! substr ($evento->hora_inicio, 0, 5) !!} horas</p></div>
			<div class="eventtext">{!! $evento->texto_h !!}</div>

			<hr class="x-gap" style="margin: 5px 0 0 0;">
			
			
	</div>
	
@else
	
	<div class="x-column x-sm x-1-2 row"
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
			<div class="eventtext"><p>{!! $evento->fecha_inicio->format('\O l, d \d\e F ') !!} as {!! substr ($evento->hora_inicio, 0, 5) !!} horas</p></div>
			<div class="eventtext">{!! $evento->texto_h !!}</div>

			<hr class="x-gap" style="margin: 5px 0 0 0;">

		</div>

		
		<div class="x-column x-sm x-1-2 last row" style="right: -3000px;"
			data-x-element="column"
			data-x-params="{&quot;fade&quot;:true,&quot;animation&quot;:&quot;in-from-right&quot;}"
			data-fade="true">
			
			@if(!is_null($evento->imagen))
                	<div class="" style=" text-align: center;">
                		<a href="{!! route('fiestas') !!}"><img class="eventos-image" alt="{!! $evento->title !!}" src="{!! asset($evento->imagen) !!}" style=""></a>
                	</div>
	        @endif
			
			
		</div>		
@endif
