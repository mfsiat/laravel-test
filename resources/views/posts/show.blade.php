@extends('layouts.app')
@extends('layouts.navbar')

@section('title')
    Landing Page
@endsection

@section('content')
<body>
  <div class="container">
    <h1 class="text-center my-5">
      {{ $posts->title }}  
    </h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <img class="card-img-top" src="{{ $posts->cover_image }}" alt="no image">
          </div>
    
          <div class="card-body">
            <h5>Brief: {{ $posts->brief }}</h5>
          <p class="card-text">
            Body: {{ $posts->body }}
          </p>
          <button class="btn btn-primary btn-block btn-md"><span class="fa fa-facebook-square"></span> Share  </button>
          <button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
          <button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection

{{-- <button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button> --}}


