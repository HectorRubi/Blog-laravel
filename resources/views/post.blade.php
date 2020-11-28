@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            @if($post->image)
                <img src="{{ $post->get_image }}" alt="Imagen" class="card-img-top">
            @elseif($post->iframe)
                <div class="embed-responsive embed-responsive-16by9">
                    {!! $post->iframe !!}
                </div>
            @endif
            <h3 class="card-title">{{ $post->title }}</h3>
            <p class="card-text">
                {{ $post->body }}
            </p>
            @if($post->image)
                @if($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !!}
                    </div>
                @endif
            @endif
            <p class="text-muted mb-0">
                <em>
                    &ndash; {{ $post->user->name }}
                </em>
                {{ $post->created_at->format('d M Y') }}
            </p>
        </div>
    </div>
</div>
@endsection
