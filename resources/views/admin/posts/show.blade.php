@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>{{ ucfirst($post->title) }}</h2>
        <img src="{{ $post->image }}" alt="{{ $post->title }} image">
        <p class="content">{{ $post->content }}</p>
    </div>
@endsection
<style>
    img {
        margin: 2rem 0;
    }

    .content {
        text-align: left;
    }
</style>
