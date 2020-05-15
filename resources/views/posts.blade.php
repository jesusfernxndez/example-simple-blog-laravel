@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          @foreach ($posts as $post) 
            <div class="card mb-3">
              @if ($post->image)
                <img src="{{ $post->get_image}}" class="card-img-top">
              @elseif ($post->iframe)
                <div class="embed-responsive embed-responsive-16by9">
                  {!! $post->iframe !!}
                </div>
              @endif
              <div class="card-body">
                <h3 class="card-title font-weight-bold">
                  {{ $post->title }}
                </h3>
                <p class="card-text">
                  {{ $post->get_excerpt }}
                  <a href="{{ route('post', $post) }}">Leer mas</a>
                </p>
              </div>
              <div class="card-footer text-muted">
                <em>
                  &ndash; {{ $post->user->name }}
                </em>
                <span class="float-right">
                  {{ $post->created_at->format('d M Y') }}
                </span>
              </div>
            </div>
          @endforeach
          {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
