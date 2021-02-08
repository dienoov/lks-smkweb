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
<nav class="navbar fixed-top navbar-expand-lg navbar-light py-lg-5">
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

<section id="team" class="d-flex align-items-center">
    <div class="container py-5" data-aos="fade-up">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-center">
                <h2 class="font-biryani-black text-uppercase">Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-6 py-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Artboards_Diversity_Avatars_by_Netguru-55.svg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title font-biryani-bold">Walter White</h5>
                                <p class="card-text"><small class="text-muted">Chief Executive Officer</small></p>
                                <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Artboards_Diversity_Avatars_by_Netguru-13.svg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title font-biryani-bold">Sarah Jhonson</h5>
                                <p class="card-text"><small class="text-muted">Product Manager</small></p>
                                <p class="card-text">Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Artboards_Diversity_Avatars_by_Netguru-16.svg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title font-biryani-bold">William Anderson</h5>
                                <p class="card-text"><small class="text-muted">CTO</small></p>
                                <p class="card-text">Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Artboards_Diversity_Avatars_by_Netguru-06.svg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title font-biryani-bold">Amanda Jepson</h5>
                                <p class="card-text"><small class="text-muted">Accountant</small></p>
                                <p class="card-text">Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-secondary p-3">
    <div class="container">
        <p class="text-white">&copy; Copyright <strong>smkweb</strong>. All Rights Reserved</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
