@extends('layouts.app')


@section('title')
MaikBlog
@stop

@section('content')
	
	<!-- Current Posts -->
    @if (count($posts) > 0)
        <div class="container">
    	<div class="row">
        <div class="panel panel-post">
            <div class="panel-heading">
                The Posts
            </div>

            <div class="panel-body">
                 @foreach ($posts as $post)
					@if($posts->first() != $post)
						<hr>
					@endif
					
					<div><a class="" href={!! route('the_post', $post->slug) !!}>
                                     <h2>{{ $post->title }}</h2></a></div>
					<div class="post-published">Published by {{ $post->author->name }} on {{ $post->created_at->format('M d,Y') }}</div>
					<div class="post-body">{!!  substr($post->body,0, strpos($post->body, "</p>"))  !!}</div>
					<div><a class="" href={!! route('the_post', $post->slug) !!}>
                                     Mostrar más...</a></div>
					            
                 @endforeach
            
            {!! $posts->links() !!}
            
            <!-- <div class="">{!! $posts->total()!!} Total posts</div> -->
            </div>
            
        </div>
        </div>
        </div>
    @endif

@stop