@extends('layouts.frontend')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        {{ Form::open(array('url' => url()->current(),'method' => 'post')) }}
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="form-group">
          {{ Form::textArea('message',$post->message,array('class' => 'form-control' )) }}
        </div>
        {{ Form::submit('Click Me!', array('class' => 'btn btn-green' )) }}
        {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
