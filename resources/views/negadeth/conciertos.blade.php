<!-- conciertos -->


<div id="conciertos"
	class="x-content-band text-white center-text bg-image parallax man"
	data-x-element="content_band"
	data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}"
	style="background-image: url({!! $fondo_conciertos !!}); background-color: #f8f8f8; padding-top: 65px; padding-bottom: 190px;">

	
	<div class="x-container max width">
		<h2 class="h-custom-headline h2"
			style="background-color: #000000; padding-top: 5px; padding-bottom: 5px; margin-top: 0px;">
			<span>Conciertos</span>
		</h2>
		
		<div class="x-column x-sm x-1-1 last" style="">
			<div class="x-container max width">
				
				@foreach ($conciertos as $concierto)	
					
					
								
					@include('negadeth/conciertocontainer', $concierto)			
						
					
					
				@endforeach
				
				
				
				
				
			
			</div>
		</div>
	</div>
</div>