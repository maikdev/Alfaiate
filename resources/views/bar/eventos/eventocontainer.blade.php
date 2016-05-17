


	<a href="{!! route('the_fiesta', $evento->id) !!}"><h3 class="h-custom-headline man h4" style="font-weight: 900;font-size: xx-large; color: hotpink;">
	<span>{!! $evento->title !!}</span>
</h3></a>

@if(!is_null($evento->imagen))
<hr class="x-gap" style="margin: 20px 0 0 0;">
	<div class="x-video-inner">
<img class="embed with-container eventos-image" 
					src="{!! asset($evento->imagen) !!}"
					frameborder="0" allowfullscreen></img>

</div>
@endif



<hr class="x-gap" style="margin: 15px 0 0 0;">
<div style="font-weight: 600;font-size: medium; background-color: #000000;">{!! $evento->texto_h !!}
</div>

<p>
