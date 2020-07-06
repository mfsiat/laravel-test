@extends('layouts.app')
@extends('layouts.navbar')

@section('title')
    Landing Page
@endsection

@section('content')
<body>
  <div class="container">
    <h1 class="text-center my-5">
      {{ $videos->title }}  
    </h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <iframe width="480" height="320" src="{{$videos->vid_url}}"></iframe>
          </div>
          <div class="card-body">
            <h5>Brief: {{ $videos->brief }}</h5>
          <p class="card-text">
            Body: {{ $videos->body }}
          </p>
          <button class="btn btn-primary btn-block btn-md"><span class="fa fa-facebook-square"></span> Share  </button>
          <button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
          <button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>          
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection



