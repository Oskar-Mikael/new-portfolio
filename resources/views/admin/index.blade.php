@extends('layout.app')
@section('content')
    <div class="pt-20 container mx-auto pb-96">
        <h1 class="my-10 text-4xl font-bold">
            Admin Panel
        </h1>
        <div class="my-8">
            <a class="py-1 px-2 text-white rounded-md bg-blue-600" href="{{ route('post.create') }}">
                Create Blog post
            </a>
        </div>
        <div class="my-8">
            <a class="py-1 px-2 text-white rounded-md bg-blue-600" href="{{ route('projects.create') }}">
                Create Project post
            </a>
            @foreach ($projects as $project)
                {{$project->github_link}}
            @endforeach
        </div>
        <div class="mt-12">
            @if (Route::has('login'))
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" class="py-1 px-2 text-white rounded-md bg-red-600"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Logout
                        </a>
                    </form>
                @endauth
            @endif
        </div>
    </div>
@endsection
