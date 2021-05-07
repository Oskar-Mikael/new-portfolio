@extends('layout.app')
@section('pageTitle', 'Edit')
@section('content')
    <div class="pt-20 container mx-auto pb-96">
        Create blog post

        <div>
            <form class="mt-4" action="/post/{{ $post->id }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <input type="text" name="title" value="{{ $post->title ?? old('title') }}" class="mb-10 w-96 border-black border-2" placeholder="Title">
                @if ($errors->has('title'))
                    <span class="text-red-600" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
                <br>
                <textarea class="resize-none w-96 h-96 border-black border-2" placeholder="Body" name="body">{{ $post->body ?? old('body') }}</textarea>
                @if ($errors->has('body'))
                    <span class="text-red-600" role="alert">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
                <br>
                <button class="bg-blue-600 text-white p-2 rounded" type="submit">Update Post</button>
            </form>
        </div>
    </div>
@endsection
