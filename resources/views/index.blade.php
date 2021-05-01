@extends('layout.app')
@section('content')
    <div style="background-image:url('storage/desktop-setup.jpg');height:600px;background-position-y:-350px" class="w-full border-b-8 border-black
                    ">
        <div id="top" class="container mx-auto">
            <h1 class="pt-60 text-white text-7xl font-bold">
                Oskar Boström
            </h1>
            <h2 class="text-gray-400 text-2xl mb-8">
                Upcoming Fullstack Web Developer
            </h2>
            <a
                class="font-bold text-xl bg-green-400 py-2 px-4 rounded-md text-white cursor-pointer transition-all project-btn">See
                my projects</a>
        </div>
    </div>

    <div class="container mx-auto grid grid-cols-1 mt-16 md:grid-cols-3 text-center gap-x-12">

        <article class="min-h-20 rounded-lg min-w-15 bg-red-200 md:my-0 my-4 md:mx-0 mx-4">
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
        <article class="min-h-20 rounded-lg min-w-15 bg-yellow-200 md:my-0 my-4 md:mx-0 mx-4">
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
        <article class="min-h-20 rounded-lg min-w-15 bg-green-200 md:my-0 my-4 md:mx-0 mx-4">
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
    <img style="max-width:90%;max-height:400px" src="storage/hero-img.jpg" alt="hero-img"
        class="border-black border-4 my-8 mx-auto" />
    
    <article id="projects" class="bg-gradient-to-r from-green-500 to-green-300 mb-5">
        <div class="container mx-auto">
            <h2 class="text-white font-bold text-3xl pt-8">
                Projects
            </h2>
            <p class="text-white pb-8">
                A collection of my completed, and still work in progress, projects.
            </p>
        </div>
    </article>
    {{-- Projects Section (WITH BACKEND) --}}

@endsection
