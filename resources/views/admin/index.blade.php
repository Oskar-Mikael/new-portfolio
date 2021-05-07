@extends('layout.app')
@section('pageTitle', 'Admin')
@section('content')
    <div class="pt-20 container mx-auto pb-96">
        <h1 class="my-10 text-4xl font-bold">
            Admin Panel
        </h1>
        <div class="my-8">
            <h2 class="text-3xl my-6">
                Blog Posts
            </h2>
            <a class="py-1 px-2 text-white rounded-md bg-blue-600" href="{{ route('post.create') }}">
                Create Blog post
            </a>
            <table class="border-2 border-black my-10 w-full text-center">
                <th class="border-2 border-black w-1/4">
                    Title
                </th>
                <th class="border-2 border-black">
                    Created at
                </th>
                <th class="border-2 border-black">
                    Manage
                </th>
                @foreach ($posts as $post)
                    <tr class="border-2 border-black">
                        <td class="border-2 border-black">
                            {{ $post->title }}
                        </td>
                        <td class="border-2 border-black">
                            {{ $post->created_at }}
                        </td>
                        <td class=" flex justify-evenly">
                            <a class="cursor-pointer py-0.5 px-1 bg-blue-300 rounded-sm"
                                href="{{ route('post.show', $post->id) }}">
                                Show
                            </a>
                            <a href="{{ route('post.edit', $post->id) }}"
                                class="cursor-pointer py-0.5 px-1 bg-green-300 rounded-sm">
                                Edit
                            </a>
                            <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class="cursor-pointer py-0.5 px-1 bg-red-300 rounded-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr class="my-10 mt-12">
        <div class="my-8">
            <h2 class="text-3xl my-6">
                Project Posts
            </h2>
            <a class="py-1 px-2 text-white rounded-md bg-blue-600" href="{{ route('projects.create') }}">
                Create Project post
            </a>
            <table class="border-2 border-black my-10 w-full text-center">
                <th class="border-2 border-black w-1/4">
                    Title
                </th>
                <th class="border-2 border-black">
                    Created at
                </th>
                <th class="border-2 border-black">
                    Manage
                </th>
                @foreach ($projects as $project)
                    <tr class="border-2 border-black">
                        <td class="border-2 border-black">
                            {{ $project->title }}
                        </td>
                        <td class="border-2 border-black">
                            {{ $project->created_at }}
                        </td>
                        <td class=" flex justify-evenly">
                            <a class="cursor-pointer py-0.5 px-1 bg-blue-300 rounded-sm"
                                href="{{ route('projects.show', $project->id) }}">
                                Show
                            </a>
                            <a href="{{ route('projects.edit', $project->id) }}"
                                class="cursor-pointer py-0.5 px-1 bg-green-300 rounded-sm">
                                Edit
                            </a>
                            <form method="POST" action="{{ route('projects.destroy', $project->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class="cursor-pointer py-0.5 px-1 bg-red-300 rounded-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

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
