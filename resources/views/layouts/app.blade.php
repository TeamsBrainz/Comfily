<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comfily</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    {{-- Navigation --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a href="index.html"><img class="navbar-brand logo" src="images/logo.png" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/properties">Property Listing</a>
                    </li>
                    @auth
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    @endauth

                    <li class="nav-item dropdown text-primary mx-3 pb-0">
                        <a class="nav-link navbar-toggler-icon active" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-primary" href="/categories">Categories</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary" href="#">My Favourites</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary" href="#">Most Searched</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary" href="/contact">Contact Us</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary" href="#">Add Property</a>
                            </li>
                            @auth
                            
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                                    @csrf
                                </form>

                            @else
                            <li class="nav-item">
                                <a class="dropdown-item text-primary" href="{{route('login')}}">Login</a>
                            </li>
                            @endauth
                        </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- footer --}}
    <footer>
        <div class="container pt-4 pb-3">

            <div class="row gx-2 p-3">
                <div class="col text-center">
                    <ul class="list-unstyled align">
                        <li><a href="/about" class="text-decoration-none text-light">About Us</a></li>
                        <li><a href="/contact    " class="text-decoration-none text-light">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Scams & Fraud Report</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Privacy Policy</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Terms Of Service</a></li>
                    </ul>
                </div>
                <div class="col text-center">
                    <ul class="list-unstyled align">
                        <li><a href="#" class="text-decoration-none text-light">List Your Apartment</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Sitemap</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Careers</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Accessibility</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center size">

                <p class="my-0">Comfily.com is a website and app for people seeking</p>
                <p class="mb-1">apartment to rent</p>

                <p class="my-0">&#xa9; 2023 comfily Inc. all photos, text and other content</p>
                <p class="mb-1">are the property of comfily Inc.</p>

                <p class="mt-3">All Rights Reverved</p>
            </div>
            <div class="card-footer text-center">
                <a href="index.html"><img class="navbar-brand footLogo" src="images/logo.png" alt="logo" /></a>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
