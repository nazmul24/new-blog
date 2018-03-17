@extends('front.master')
@section('main-content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('/front') }}/img/post-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1>{{ $post->title }}</h1>
          <h2 class="subheading">{{ $post->subtitle }}</h2>
          <span class="meta">Posted by
            <a href="#">Start Bootstrap</a>
          on August 24, 2017</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- fb Comments Plugin Code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <small>Created at {{ $post->created_at->diffForHumans() }}</small>
        @foreach($post->categories as $category)
        <small class="pull-right" style="margin-right: 20px;">
        <a href="{{ url('/post/category',$category->slug) }}">{{ $category->name }}</a>
        </small>
        @endforeach
        {!! htmlspecialchars_decode($post->body) !!}

        <!-- Tag Clouds -->
        <h3>Tag Clouds</h3>
        @foreach($post->tags as $tag)
        <a href="{{ url('/post/tag',$tag->slug) }}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
          {{ $tag->name }}
        </small></a>
        @endforeach
      </div>
      <!-- fb Comments Plugin -->
      <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
    </div>
  </div>
</article>
<hr>
@endsection