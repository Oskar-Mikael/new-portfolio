@extends('layout.app')
@section('pageTitle', 'Blog')
@section('content')
    <div class="container mx-auto pt-16 pb-96 px-4 md:px-0">
        <h1 class="text-4xl pt-20 font-bold">
            Blog
        </h1>
        @foreach ($posts as $post)
            <article class="bg-gray-100 w-9/12 mx-auto py-12 md:px-40 px-14 my-14">
                <h2 class="text-3xl font-bold">
                    {{ $post->title }}
                </h2>
                <p class="text-gray-400">
                    {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}
                </p>
                <p class="mt-2 mb-6 text-xl">
                    {{ \Illuminate\Support\Str::limit($post->body, 50, $end = '...') }}
                </p>
                <a class="cursor-pointer text-green-800 py-1 px-2 underline hover:no-underline border-2 border-green-400 rounded-md" href="{{ route('post.show', $post->id) }}">
                    Read more
                </a>
            </article>
        @endforeach
    </div>
@endsection
