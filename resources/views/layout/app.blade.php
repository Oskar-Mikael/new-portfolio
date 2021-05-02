<!doctype html>

<head>
    <!-- ... --->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Home - Oskar Boström</title>
</head>

<body>
    <header>
        <nav id="navbar" class="min-h-3.5 bg-gray-700 fixed w-full z-10">

            <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul id="menu" class="float-right flex items-center justify-center mr-2">
                <li class="flex text-white p-4 text-lg transition hover:bg-gray-300">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li id="dropdown" class="relative cursor-pointer flex text-white p-4 text-lg transition hover:bg-gray-300">

                    CV
                    <img id="dropdown-arrow" class="transition" src="/storage/arrow-point-to-down.png" />
                    <div style="right:-0.8rem;" id="dropdown-content" class="text-lg hidden absolute top-14 py-8 px-4 bg-gray-700 text-white">
                    <a href="/cv">
                        <p class="mb-2">Swedish</p>
                    </a>
                    <a href="/cv-en">
                        <p>English</p>
                    </a>
                </div>

                </li>
                <li class="flex text-white p-4 text-lg transition hover:bg-gray-300"><a href="/contact">
                        Contact
                    </a></li>
                <li class="flex text-white p-4 text-lg transition hover:bg-gray-300"><a href="/blog">
                        Blog
                    </a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="min-h-15 bg-gray-900 ">
        <section class="container mx-auto">
            <img src="/storage/favicon.png" class="float-right pt-32" />
            <div class="footer-info">
                <h2 class="pt-12 mb-4 text-3xl text-white ">
                    Oskar Boström
                </h2>
                <p class="text-white text-xl">
                    A portfolio and personal website
                </p>
                <p class="text-white text-xl">
                    For more information, please contact me
                </p>
                <p class="mt-4 text-white">
                    &copy; 2021 - Oskar Boström
                </p>
            </div>
            <ul class="mt-12 pb-12 text-white text-xl">
                <li class="pt-2">
                    <a href="mailto:oskar.m.bostrom@gmail.com">
                        Email
                    </a>
                </li>
                <li class="pt-2">
                    <a href="https://www.linkedin.com/in/oskar-bostr%C3%B6m-6462b81b5/" target="_blank">
                        Linkedin
                    </a>
                </li>
                <li class="pt-2">
                    <a href="https://www.instagram.com/ogge_bstrom/" target="_blank">
                        Instagram
                    </a>
                </li>
                <li class="pt-2">
                    <a href="https://github.com/oskar-mikael" target="_blank">
                        Github
                    </a>
                </li>
            </ul>
        </section>
    </footer>
    <script src="/js/main.js"></script>
</body>
