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

<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-1">
                <h1 class="font-biryani-black">Better Solutions For Your Business</h1>
                <p class="font-biryani text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi
                    debitis deserunt.</p>
                <div class="d-lg-flex pt-3 pt-sm-0">
                    <button href="#about" class="btn btn-hero font-biryani">Get Started</button>
                </div>
            </div>
            <div class="col-lg-7 order-1 order-lg-2 hero-img text-center">
                <img src="img/drawkit-content-man-colour.svg" class="img-fluid mt-lg-5 pt-5" alt="content">
            </div>
        </div>
    </div>

</section>

<section id="about-us" class="d-flex align-items-center">
    <div class="container py-5" data-aos="fade-up">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-center">
                <h2 class="font-biryani-black text-uppercase">About us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consectetur
                    corporis deserunt dignissimos dolor est.</p>
                <ul>
                    <li>Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    <li> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                    <li>Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="d-flex align-items-center">
    <div class="container py-5" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-2">
                <img src="img/support-notes-colour.svg" class="w-50 animated" alt="">
            </div>
            <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <h2 class="font-biryani-black text-uppercase">Skills</h2>
                <p class="font-biryani text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi
                    debitis deserunt, dolor doloribus error esse exercitationem expedita facere iste itaque.</p>


                <div class="skills-content order-2 order-lg-1">

                    <span class="text-uppercase"><strong>HTML</strong></span>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-spray w-75" role="progressbar" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>

                    <span class="text-uppercase"><strong>CSS</strong></span>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-spray w-50" role="progressbar" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>

                    <span class="text-uppercase"><strong>JS</strong></span>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-spray w-100" role="progressbar" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section id="services" class="d-flex align-items-center">
    <div class="container py-5" data-aos="fade-up">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-center">
                <h2 class="font-biryani-black text-uppercase">Services</h2>
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
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" height="36" class="text-turqoise">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </h5>
                        <h5 class="card-subtitle mb-2 font-biryani-bold">Lorem Ipsum</h5>
                        <p class="card-text">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" height="36" class="text-turqoise">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </h5>
                        <h5 class="card-subtitle mb-2 font-biryani-bold">Sed ut perspici</h5>
                        <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" height="36" class="text-turqoise">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </h5>
                        <h5 class="card-subtitle mb-2 font-biryani-bold">Magni Dolores</h5>
                        <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" height="36" class="text-turqoise">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </h5>
                        <h5 class="card-subtitle mb-2 font-biryani-bold">Nemo Enim</h5>
                        <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section id="pricing" class="d-flex align-items-center">
    <div class="container py-5" data-aos="fade-up">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-center">
                <h2 class="font-biryani-black text-uppercase">Pricing</h2>
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
            <div class="col-lg-4 py-3">
                <div class="card border-0 shadow-sm h-100 px-5 py-3">
                    <div class="card-title font-biryani-bold">Free Plan</div>
                    <h1 class="card-text">$0</h1>
                    <p class="text-turqoise">per month</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Quam adipiscing vitae proin
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nec feugiat nisl pretium
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nulla at volutpat diam uteera
                    </p>
                    <p class="text-muted text-decoration-line-through">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-muted">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        Pharetra massa massa ultricies
                    </p>
                    <p class="text-muted text-decoration-line-through">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-muted">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        Massa ultricies mi quis hendrerit
                    </p>
                </div>
            </div>
            <div class="col-lg-4 py-3">
                <div class="card border-spray shadow-sm h-100 px-5 py-3">
                    <div class="card-title font-biryani-bold">Business Plan</div>
                    <h1 class="card-text">$29</h1>
                    <p class="text-turqoise">per month</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Quam adipiscing vitae proin
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nec feugiat nisl pretium
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nulla at volutpat diam uteera
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Pharetra massa massa ultricies
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Massa ultricies mi quis hendrerit
                    </p>
                </div>
            </div>
            <div class="col-lg-4 py-3">
                <div class="card border-0 shadow-sm h-100 px-5 py-3">
                    <div class="card-title font-biryani-bold">Developer Plan</div>
                    <h1 class="card-text">$49</h1>
                    <p class="text-turqoise">per month</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Quam adipiscing vitae proin
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nec feugiat nisl pretium
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nulla at volutpat diam uteera
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Pharetra massa massa ultricies
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             height="24" class="text-success">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Massa ultricies mi quis hendrerit
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="d-flex align-items-center mt-5">

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-center">
                <h2 class="font-biryani-black text-uppercase">Contact</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-5 py-3">
                <div class="card border-0 shadow h-100 p-3">
                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" height="44" class="bg-light text-spray p-2 rounded-circle">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="col-10">
                                <h5 class="font-biryani-bold lh-1">Location</h5>
                                <p class="lh-1">Jl. Tanimbar No. 22</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" height="44" class="bg-light text-spray p-2 rounded-circle">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="col-10">
                                <h5 class="font-biryani-bold lh-1">Email</h5>
                                <p class="lh-1">mail@smkn4malang.sch.id</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" height="44" class="bg-light text-spray p-2 rounded-circle">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="col-10">
                                <h5 class="font-biryani-bold lh-1">Call</h5>
                                <p class="lh-1">(0341) 353798</p>
                            </div>
                        </div>
                        <div class="row">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15804.339993250223!2d112.627182!3d-7.9901589!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90fd5c6fcedf6acf!2sSekolah%20Menengah%20Kejuruan%20Negeri%204%20Malang!5e0!3m2!1sen!2sid!4v1612283900531!5m2!1sen!2sid"
                                width="600" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 py-3">
                <div class="card border-0 shadow h-100 py-4 px-3">
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control input-spray">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Your Email</label>
                                <input type="email" class="form-control input-spray">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control input-spray">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Message</label>
                                <textarea id="" cols="30" rows="10" class="form-control input-spray"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-spray">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="bg-light py-5">
    <div class="container">
        <h4 class="font-biryani-bold text-center">Join Our Newsletter</h4>
        <p class="text-center">Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <div class="row py-4 justify-content-center">
            <div class="col-lg-8">
                <div class="input-group">
                    <input type="text" class="form-control input-spray input-subscribe border-0 shadow-sm">
                    <div class="input-group-apend">
                        <button type="submit" class="btn btn-subscribe border-0 shadow-sm">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-4">
        <div class="row my-3">
            <div class="col-lg-3 col-sm-6 py-3">
                <img src="img/logo.png" class="w-50 mb-4" alt="logo">
                <p class="lh-1">Jl. Tanimbar No. 22</p>
                <p class="lh-1">Malang, Jawa Timur</p>
                <p class="lh-1">Indonesia</p>
                <br>
                <p class="lh-1"><strong>Phone:</strong> (0341) 353798</p>
                <p class="lh-1"><strong>Email:</strong> mail@smkn4malang.sch.id</p>
            </div>
            <div class="col-lg-3 col-sm-6 py-3 px-lg-5">
                <h5 class="font-biryani-bold">Useful Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#hero" class="text-decoration-none lh-lg">Home</a></li>
                    <li><a href="#about-us" class="text-decoration-none lh-lg">About us</a></li>
                    <li><a href="#services" class="text-decoration-none lh-lg">Services</a></li>
                    <li><a href="#team" class="text-decoration-none lh-lg">Team</a></li>
                    <li><a href="#pricing" class="text-decoration-none lh-lg">Pricing</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 py-3 px-lg-5">
                <h5 class="font-biryani-bold">Our Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none lh-lg">Web Design</a></li>
                    <li><a href="#" class="text-decoration-none lh-lg">Web Development</a></li>
                    <li><a href="#" class="text-decoration-none lh-lg">Product Management</a></li>
                    <li><a href="#" class="text-decoration-none lh-lg">Marketing</a></li>
                    <li><a href="#" class="text-decoration-none lh-lg">Graphic Design</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 py-3">
                <h5 class="font-biryani-bold">Our Social Networks</h5>
                <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
