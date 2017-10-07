@extends('layouts.frontend')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        {{ Form::open(array('url' => 'post','method' => 'post')) }}
        <div class="form-group">
          {{ Form::textArea('username','',array('class' => 'form-control' )) }}
        </div>
        {{ Form::submit('Click Me!', array('class' => 'btn btn-green' )) }}
        {{ Form::close() }}
        @foreach ($posts as $post)
          <div class="row">
            <div class="col-sm-8">
              <p>Name : {{ Auth::user()->name }}</p>
              <p>Message : {{ $post->message }}</p>
            </div>
            <div class="col-sm-4">
              <a href="{{ url('post/edit') }}/{{$post->id}}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
            </div>
          </div>

          <hr>
        @endforeach
      </div>
    </div>
  </div>
@endsection
