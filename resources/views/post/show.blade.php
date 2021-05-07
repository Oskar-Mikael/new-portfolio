@extends('layout.app')
@section('content')
    <div class="container mx-auto pt-20 pb-96">
        <div class="mt-10">
            <h1 class="text-4xl font-bold">
                {{ $post->title }}
            </h1>
            <p class="mt-8 text-2xl">
                {{ $post->body }}
            </p>
        </div>
    </div>
@endsection
