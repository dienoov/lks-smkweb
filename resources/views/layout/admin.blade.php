<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@400;700;900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light py-lg-5">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" height="24" alt="logo">
        </a>
        <button class="navbar-toggler navbar-toggler-borderless border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <svg height="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link font-biryani-bold active" aria-current="page" href="#hero">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-biryani-bold" href="#about-us">About us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-biryani-bold" href="#skills">Skills</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-biryani-bold" href="#services">Services</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-biryani-bold" href="#team">Team</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-biryani-bold" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-biryani-bold" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="bg-secondary p-3">
    <div class="container">
        <p class="text-white">&copy; Copyright <strong>smkweb</strong>. All Rights Reserved</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
