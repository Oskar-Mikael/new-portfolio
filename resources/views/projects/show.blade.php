@extends('layout.app')
@section('pageTitle', $project->title)
@section('content')
    <div class="container mx-auto pt-20 pb-96">
        <div class="mt-10">
            <h1 class="text-4xl font-bold">
                {{ $project->title }}
            </h1>
            <p class="mt-8 text-2xl">
                {{ $project->body }}
            </p>
            <div class="flex justify-center mt-10">
                <img style="max-width:90%;max-height:360px" class="max-w-90 max-h-400 border-black border-4" src="/storage/{{ $project->img_path }}" />
            </div>
        </div>
    </div>
@endsection
