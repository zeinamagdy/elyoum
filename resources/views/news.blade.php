@extends('layouts.app')
@section('content')
<!-- services section -->
    <section class="news no-bg">
      <div class="container">
      	@if($posts->count())
        <div class="row">
        @foreach($posts as $post)
          <div class="col-xs-12 col-md-4"><!-- start post -->
            <div class="post">
              <div class="img-container">

                <img src="<?php echo "images/$post->image"?>" class="img-responsive" alt="" />
              </div>
              <div class="post-caption">
                <h5>{{$post->body}}</h5>
                <footer>
                  <span><i class="fa fa-comment-o"></i>320</span>
                  <span><i class="fa fa-heart-o"></i>300</span>
                  <a href="{{ route('posts.show', $post->id) }}" class="btn">اكمل القراءه</a>
                </footer>
              </div>
            </div>
          </div><!-- end post -->
        @endforeach
        
        </div>
        @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif
      </div>
    </section>
@endsection