@extends('layout.app')
@section('navigation')
<nav id="navbar">
    <a href="/">
        <img src="/assets/favicon.png" class="favicon">
    </a>
    <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul id="menu">
        <li class="active">
            <a href="/">
                Home
            </a>
        </li>
        <li class="dropdown">

            CV
            <img class="dropdown-arrow" src="/assets/arrow-point-to-down.png" />
            <div class="dropdown-content text-sm text-white">
                <a href="/cv.html">
                    <p class="mb-1">Swedish</p>
                </a>
                <a href="/cv-en.html">
                    <p>English</p>
                </a>
            </div>

        </li>
        <li><a href="/contact.html">
                Contact
            </a></li>
        <li><a href="/blog.html">
                Blog
            </a></li>
    </ul>
</nav>
@endsection