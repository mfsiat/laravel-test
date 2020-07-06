@extends('layouts.app')
@extends('layouts.navbar')

@section('title')
    Landing Page
@endsection

@section('content')
<main class="py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h3>Section 1</h3>
        @foreach ($posts as $post)
          <a href="/posts/{{ $post->id }}">
            <div class="card cad-default">
              <img class="img-thumbnail" src="{{$post->cover_image}}" alt="no image" srcset="">
                <div class="card-body">
                  <h2>{{ $post->title }}</h2>
                  <h5>
                    Brief: {{ $post->brief }}
                  </h5>
                  <p class="card-text">
                    Body: {{ $post->body }}
                  </p>
                </div>
            </div>
          </a>
        @endforeach
      </div> 
      <div class="col-md-4">
        <h3>Section 2</h3>
        @foreach ($videos as $video)
          <ul class="list-group">
            <iframe class="card-img-top" src={{$video->vid_url}}></iframe>
            <li class="list-group-item">
              <a href="/videos/{{ $video->id }}">
                <h4>{{ $video->title }}</h4>
                <h5>{{ $video->brief }}</h5>
                <p>{{ $video->body }}</p>
              </a>
            </li>
          </ul>
        @endforeach
      </div>
    </div>
  </div>
</main>
@endsection

