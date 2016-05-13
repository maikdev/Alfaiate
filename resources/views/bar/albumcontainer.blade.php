<div class=" embed with-container"><div class="x-video-inner">
<img width="560" height="315"
				src="{!! asset($album->resources()->first()->link) !!}"
				frameborder="0" allowfullscreen></img>

</div></div>

				<br />
<hr class="x-gap" style="margin: 20px 0 0 0;">
<a href="{!! route('the_fotos', $album->id) !!}"><h3 class="h-custom-headline man h4" style="font-weight: 900;font-size: xx-large; color: hotpink;">
	<span>{!! $album->title !!}</span>
</h3></a>
<hr class="x-gap" style="margin: 15px 0 0 0;">
<div style="font-weight: 600;font-size: medium;">{!! $album->texto_h !!}
</div>

<p>
