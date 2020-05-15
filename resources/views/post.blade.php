@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if ($post->image)
                <img src="{{ $post->get_image}}" class="card-img-top">
              @endif
              <div class="card-body">  
                <h2 class="card-title font-weight-bold">
                  {{ $post->title }}
                </h2>
                <p class="card-text">
                  {{ $post->body }}
                </p>
                <p class="text-muted">
                  <em>
                    &ndash; {{ $post->user->name }}
                  </em><br>
                  {{ $post->created_at->format('d M Y') }}
                </p>
                @if ($post->iframe)
                  <div class="embed-responsive embed-responsive-16by9">
                    {!! $post->iframe !!}
                  </div>
                @endif
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
