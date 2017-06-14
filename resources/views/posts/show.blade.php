@extends('layouts.master')

@section('content')
	<div class="blog-post">
	    <h2 class="blog-post-title">
	        {{ $post->title }}
	    </h2>
	    <p class="blog-post-meta">
	      {{ $post->created_at->toFormattedDateString() }}
	    </p>

	    {{ $post->body }}
	    <hr>
	    <ul class="list_group">
		    <div class="comments">
		    	@foreach ($post->comments as $comment)
		    		<li class="list-group-item">
		    			<strong>
		    				{{ $comment->created_at->diffForHumans() }}: &nbsp;
		    			</strong>
		    			{{ $comment->body }}
		    		</li>
		    	@endforeach
		    </div>
	    </ul>

	</div><!-- /.blog-post -->
@endsection