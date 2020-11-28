@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            <p class="card-text">
                {{ $post->body }}
            </p>
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
