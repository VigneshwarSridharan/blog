@extends('layouts.frontend')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="message-wrapper">
          @foreach ($posts as $post)
            <div class="message-item">
              <div class="profile">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </div>
              <div class="content">
                  <div class="heading">
                    <h4>{{ $users->find($post->user_id)->name }}</h4>
                  </div>
                  <div class="message">
                    <p>{{ $post->message }}</p>
                  </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
