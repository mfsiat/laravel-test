@extends('layouts.app')
@extends('layouts.navbar')

@section('title')
    Create Post
@endsection

@section('content')
<h1 class="text-center my-5">
  Create Post
</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">Create new Post</div>
      <div class="card-body">
        {{-- displaying the errors  --}}
        @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                  <li class="list-group-item">
                    {{ $error }}
                  </li>
              @endforeach
            </div>
        @endif
        <form action="/posts.store" method="POST">
          @csrf
          <div class="form-group">
            <input name="title" type="text" class="form-control" placeholder="title">
          </div>
          <div class="form-group">
            <input name="brief" type="text" class="form-control" placeholder="brief">
          </div>
          <div class="form-group">
            <textarea name="body" placeholder="body" id="" cols="5" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input name="cover_image" placeholder="cover_image" id="" cols="5" rows="5" class="form-control"></input>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Create Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection