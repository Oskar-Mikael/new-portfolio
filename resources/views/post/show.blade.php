@extends('layout.app')
@section('pageTitle', $post->title)
@section('content')
    <div class="container mx-auto pt-20 pb-96 px-4 md:px-0">
        <a href="/blog" class="py-1 px-2 bg-yellow-500 rounded-lg">
            Go back
        </a>
        <div class="mt-10">
            <h1 class="text-4xl font-bold">
                {{ $post->title }}
            </h1>
            <p class="text-gray-400">
                {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}
            </p>
            <p class="mt-8 text-2xl">
                {!! nl2br(e($post->body)) !!}
            </p>
        </div>
    </div>
@endsection
