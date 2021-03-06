@extends('layout.app')
@section('pageTitle', 'Home')
@section('content')
    <div style="background-image:url('storage/desktop-setup.jpg');height:600px;background-position-y:-350px" class="w-full border-b-8 border-black
                                                            ">
        <div id="top" class="container mx-auto px-4 md:px-0">
            <h1 class="pt-60 text-white text-7xl font-bold">
                Oskar Boström
            </h1>
            <h2 class="text-gray-400 text-2xl mb-8">
                Upcoming Fullstack Web Developer
            </h2>
            <a id="header-btn"
                class="font-bold text-xl bg-green-400 py-2 px-4 rounded-md text-white cursor-pointer transition-all project-btn">See
                my projects</a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div style="margin:4rem auto!important;"
            class="container justify-items-center grid grid-cols-1 text-center gap-y-12 mr-0">

            <article class="min-h-20 rounded-lg max-w-3xl bg-red-200 md:my-0 my-4 md:mx-0 mx-4">
                <img class="mx-auto my-4" src="storage/user.png" alt="user-icon" />
                <h2 class="text-2xl font-bold">
                    Who am I?
                </h2>
                <p class="p-4 mt-2 leading-9 text-xl">
                    My name is Oskar. I have a passion for computers, programming and web development. I am
                    currently
                    studying to become a Fullstack Web developer, focusing both on front- and backend. I consider
                    myself
                    a good problem solver and a thorough person, and take good time to make sure my work lives up to
                    the
                    highest possible standard.
                </p>
            </article>
            <article class="min-h-20 rounded-lg max-w-3xl bg-yellow-200 md:my-0 my-4 md:mx-0 mx-4">
                <img class="mx-auto my-4" src="storage/monitor.png" alt="monitor-icon" />
                <h2 class="text-2xl font-bold">
                    My interests
                </h2>
                <p class="p-4 mt-2 leading-9 text-xl">
                    In terms of web development, I am most interested in the backend. I enjoy working with PHP and
                    Laravel, Databases,
                    MVC applications, and APIs. This is what I would preferably become an
                    expert
                    in, while having frontend development as a secondary skill, but still enough to be able to
                    operate
                    as a fullstack developer.
                </p>
            </article>
            <article class="min-h-20 rounded-lg max-w-3xl bg-green-200 md:my-0 my-4 md:mx-0 mx-4">
                <img class="mx-auto my-4" src="storage/pen.png" alt="pen-icon" />
                <h2 class="text-2xl font-bold">
                    Why should you work with me?
                </h2>
                <p class="p-4 mt-2 leading-9 text-xl">
                    I see myself as a great teamplayer, and a dedicated worker. Solving problems is what programming
                    is
                    mostly about, and I feel like my skills in solving problems are of a good character. My assets
                    would
                    be of great benefit to your team.
                </p>
            </article>

        </div>
        <div class="mt-16">
            <h2 class="text-center text-4xl font-bold">
                Recent Blog Posts
            </h2>
            <div class="container mx-auto mt-8 px-4 md:px-0">
                @foreach ($posts as $post)
                    <article class="bg-gray-100 w-9/12 mx-auto py-12 md:px-32 px-14 mb-14 mt-6">
                        <h2 class="text-3xl font-bold">
                            {{ $post->title }}
                        </h2>
                        <p class="text-gray-400">
                            {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}
                        </p>
                        <p class="mt-2 mb-6 text-xl">
                            {{ \Illuminate\Support\Str::limit($post->body, 150, $end = '...') }}
                        </p>
                        <a class="cursor-pointer text-green-800 py-1 px-2 underline hover:no-underline border-2 border-green-400 rounded-md"
                            href="{{ route('post.show', $post->id) }}">
                            Read more
                        </a>
                    </article>
                @endforeach
                <div class="text-center pt-10">
                    <a href="/blog" class="py-2 px-4 bg-blue-500 rounded-md text-2xl text-white">
                        Read all
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img style="max-width:90%;max-height:400px" src="storage/hero-img.jpg" alt="hero-img"
        class="border-black border-4 my-8 mx-auto" />
    <button id="scroll-top" class="fixed z-30 bottom-5 outline-none bg-gray-500 text-white rounded-lg transition-all p-2" style="right:-100px"><img alt="up-arrow" style="max-width:70%;height:50px " class="mx-auto" id="arrow-img" src="/storage/up-arrow.png"> </button>
    <article id="projects" class="bg-gradient-to-r from-green-500 to-green-300 mb-5">
        <div class="container mx-auto px-4 md:px-0 text-center md:text-left">
            <h2 class="text-white font-bold text-3xl pt-8">
                Projects
            </h2>
            <p class="text-white pb-8 ">
                A collection of my completed, and still work in progress, projects.
            </p>
        </div>
    </article>
    <div class="grid md:grid-cols-2 grid-cols-1 container mx-auto mt-10 gap-x-10 px-4 md:px-0">
        @foreach ($projects as $project)
            <div class="w-full bg-gray-200 p-4 rounded-md transition-all mb-12">
                <h3 class="text-3xl font-bold text-center">
                    {{ $project->title }}
                </h3>
                <div class="flex justify-center">
                    <img src="{{ $project->img_path }}" style="max-width:90%;max-height:360px"
                        class=" border-4 border-black relative z-10 mt-2" />
                </div>
                <div class="text-center my-8">
                    <a class="cursor-pointer text-green-800 py-1 px-2 mx-4 underline hover:no-underline border-2 border-green-400 rounded-md"
                        href="{{ $project->github_link }}" target="_blank">
                        Github
                    </a>
                    <a href="{{ route('projects.show', $project->id) }}"
                        class="cursor-pointer text-green-800 py-1 px-2 underline hover:no-underline border-2 border-green-400 rounded-md">
                        Read more
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
