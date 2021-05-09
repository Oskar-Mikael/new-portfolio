@extends('layout.app')
@section('pageTitle', 'Contact')
@section('content')
    <div class="container mx-auto bg-gray-200 p-8 mb-10">
        <h1 class="text-3xl pt-20 font-bold">
            Contact me
        </h1>
        <p class="text-xl mt-2">
            Contact me if you have any questions or want further information.
        </p>
        <p class="text-xl mb-12">
            I respond fastest on E-Mail, but all ways of contacting works absolutely fine.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 text-center ">
            <span>
                <a href="mailto:oskar.m.bostrom@gmail.com">
                    <img src="storage/email-icon.png" alt="email-icon" class="max-h-24 max-w-20 mx-auto" />
                    <h3 class="mb-12 text-xl mt-2">
                        Email
                    </h3>
                </a>
            </span>
            <span>
                <a href="https://www.linkedin.com/in/oskar-bostr%C3%B6m-6462b81b5/" target="_blank">
                    <img src="storage/linkedin-icon.png" alt="linkedin-icon" class="max-h-24 max-w-20 mx-auto" />
                    <h3 class="mb-12 text-xl mt-2">
                        LinkedIn
                    </h3>
                </a>
            </span>
            <span>
                <a href="https://www.instagram.com/ogge_bstrom/" target="_blank">
                    <img src="storage/instagram-icon.png" alt="instagram-icon" class="max-h-24 max-w-20 mx-auto" />
                    <h3 class="mb-12 text-xl mt-2">
                        Instagram
                    </h3>
                </a>
            </span>
            <span>
                <a href="https://github.com/oskar-mikael" target="_blank">
                    <img src="storage/github-icon.png" alt="github-icon" class="max-h-24 max-w-20 mx-auto" />
                    <h3 class="mb-5 text-xl mt-2">
                        Github
                    </h3>
                </a>
            </span>
        </div>
        <h2 class="mb-4 text-xl">
            Send a message
        </h2>
        <form class="mx-auto" action="/contact-form" method="post">
            @csrf
            @method('POST')
            <div class="md:flex inline-block">
                <input type="text" required placeholder="Name" name="name" class="text-white bg-gray-300 text-xl mx-4 rounded-md md:my-0 my-4 pl-4 w-full md:w-1/2 h-14">
                <input type="email" required placeholder="Email" name="email" class="text-white bg-gray-300 text-xl mx-4 rounded-md md:my-0 my-4 pl-4 w-full md:w-1/2 h-14">
            </div>
            <textarea class="mt-6 h-64 w-full text-white bg-gray-300 text-xl mx-4 rounded-md pl-4 resize-none pt-6" name="message" required placeholder="Message"></textarea>
            <button class="mt-12 text-center flex mx-auto text-green-400 cursor-pointer border-green-400 border-2 px-2 py-4 text-3xl font-bold rounded-sm" type="submit">Send</button>
        </form>
        @if(Session::has('success'))
        <div class="text-center mt-10 text-green-500 text-2xl">
            {{Session::get('success')}}
        </div>
    @endif
    </div>
@endsection
