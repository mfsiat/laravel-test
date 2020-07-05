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
        <ul class="list-group">
          <li class="list-group-item">
            {{ $post->title }}
            {{ $post->brief }}
            {{ $post->body }}
          </li>
        </ul>
        @endforeach
      </div> 
      <div class="col-md-4">
        <h3>Section 2</h3>
        @foreach ($videos as $video)
          <ul class="list-group">
            <li class="list-group-item">
              {{ $video->title }}
            </li>
          </ul>
        @endforeach
      </div>
    </div>
  </div>
</main>
@endsection

