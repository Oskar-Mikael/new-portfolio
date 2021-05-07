@extends('layout.app')
@section('pageTitle', 'Create')
@section('content')
    <div class="pt-20 container mx-auto pb-96">
        Create project
        <div>
            <form class="mt-4" action="{{ route('projects.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <input type="text" name="title" value="{{ old('title') }}" class="mb-10 w-96 border-black border-2"
                    placeholder="Title">
                @if ($errors->has('title'))
                    <span class="text-red-600" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
                <br>
                <textarea class="resize-none w-96 h-96 mb-10 border-black border-2" placeholder="Body"
                    name="body">{{ old('body') }}</textarea>
                @if ($errors->has('body'))
                    <span class="text-red-600" role="alert">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
                <br>
                <input type="file" name="img_path" value="{{ old('img_path') }}" class="mb-10 w-96 border-black border-2"
                    placeholder="Image Path">
                @if ($errors->has('img_path'))
                    <span class="text-red-600" role="alert">
                        <strong>{{ $errors->first('img_path') }}</strong>
                    </span>
                @endif
                <br>
                <input type="text" name="github_link" value="{{ old('github_link') }}" class="mb-10 w-96 border-black border-2"
                    placeholder="Github Link">
                @if ($errors->has('github_link'))
                    <span class="text-red-600" role="alert">
                        <strong>{{ $errors->first('github_link') }}</strong>
                    </span>
                @endif
                <br>
                <button class="bg-blue-600 text-white p-2 rounded" type="submit">Create Project</button>
            </form>
        </div>
    </div>
@endsection
