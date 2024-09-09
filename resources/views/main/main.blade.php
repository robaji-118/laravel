<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- animate --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    {{-- end animate --}}
    {{-- icon --}}
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
</head>
<body>



    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-transparent ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3 class="animate__animated animate__fadeInDown"><span>Raybe</span></h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">
                            <p><b>Home</b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">
                            <p><b>About</b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact">
                            <p><b>Contact</b></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    <div>@yield('nav')</div>

    {{-- Footer --}}
    <footer id="footer" class=" text-white pt-5 gb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <!-- Halaman -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        Halaman
                    </h5>
                    <p>
                        <a href="/home" class="text-white text-decoration-none">Home</a>
                    </p>
                    <p>
                        <a href="/about" class="text-white text-decoration-none">About</a>
                    </p>
                    <p>
                        <a href="/contact" class="text-white text-decoration-none">Contact</a>
                    </p>
                </div>

                <!-- Produk -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        Menu
                    </h5>
                    <p>
                        <a href="#about_me" class="text-white text-decoration-none">Home</a>
                    </p>
                    <p>
                        <a href="#skill" class="text-white text-decoration-none">About me</a>
                    </p>
                    <p>
                        <a href="#project" class="text-white text-decoration-none">Contact</a>
                    </p>


                </div>

                <!-- Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        Location
                    </h5>
                    <p>
                        <i class="bi bi-geo-alt m-1"></i>Sambisirah Wonorejo, Pasuruan - Jawa Timur
                    </p>
                    <p><i class="bi bi-envelope m-1"></i>abirojabi8@gmail.com</p>
                    <p><i class="bi bi-instagram m-1"></i>@rbyyyyx._</p>
                </div>
            </div>
            <hr class="mb-4" />
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>
                        &copy; Copyright all right Reserved by :
                        <a href="#home" style="text-decoration: none">
                            <strong class="text-light">Rojabby gabteng</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://github.com/robaji-118" class="btn-floating btn-sm text-white"
                                    style="font-size: 23px"><i class="bi bi-github"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/rbyyyyx._/?next=%2F" target="_blank"
                                    class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="bi bi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer end --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>
</html>
