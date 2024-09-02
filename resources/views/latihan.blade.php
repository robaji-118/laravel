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
    <title>Latihan latihan_Laravel</title>
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
                        <a class="nav-link active" aria-current="page" href="#home">
                            <p><b>Home</b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">
                            <p><b>About</b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">
                            <p><b>Contact</b></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}


    {{-- home --}}
    <div id="home">
        <div class="container text-center home ">
            <div class="row justify-content-evenly">
                <div class="col-md-4 text-center">
                    <div class="home2">
                        <h1 class="animate__animated animate__fadeInUp animate__delay-2s text-start">Hii! Developers
                            <span class="bla">I'am Rojaby</span>
                        </h1>
                        <p class="animate__animated animate__fadeInUp animate__delay-3s text-start "><b>My job as a
                                UI/UX & Front
                                end</b></p>
                        <h2 class="item-sosmed animate__animated animate__fadeInUp animate__delay-4s text-start">
                            <a href="https://github.com/robaji-118" class="bi bi-github"></a>
                            <a href="https://www.instagram.com/rbyyyyx._/?next=%2F" class="bi bi-instagram"></a>
                            <a href="#" class="bi bi-facebook"></a>
                            <a href="#" class="bi bi-whatsapp"></a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/toji.png') }} " class="toji     " alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- end home --}}

    {{-- about --}}
    <div id="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,128L48,122.7C96,117,192,107,288,112C384,117,480,139,576,133.3C672,128,768,96,864,96C960,96,1056,128,1152,117.3C1248,107,1344,53,1392,26.7L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container ">
            <div class="saya ">
                <div class="row saya2 ">
                    <div class="col-md-4 text-center ">
                        <div class="foto_saya1">
                            <img src="{{ asset('img/saya.jpeg') }}" class="foto_saya2" height="450" alt="">
                            <div class="foto_saya3">
                                <div class="text_foto"> M Rojabby Syihabuddin </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 saya_cp">
                        <h3 class="animate__animated animate__fadeInUp animate__delay-5s">Rojabby</h3>
                        <p class=" animate__animated animate__fadeInUp animate__delay-5s">Age : 17th</p>
                        <p class=" animate__animated animate__fadeInUp animate__delay-5s">Location : Pasuruan, Wonorejo,
                            Sambisirah</p>
                        <p class=" animate__animated animate__fadeInUp animate__delay-5s">No Phone : 088801793515 </p>
                        <p class=" animate__animated animate__fadeInUp animate__delay-5s">Status : Developer </p>
                        <p class=" animate__animated animate__fadeInUp animate__delay-5s">Email :
                            rojabbygabteng@gmail.com</p>
                        <p class=" animate__animated animate__fadeInUp animate__delay-5s">Brithday : 11 - August - 2007
                        </p>
                    </div>
                    <div class="col-md-4 text-center saya_cp2">
                        <h4 class=" animate__animated animate__fadeInUp animate__delay-5s"><b>Thank you for visiting and
                                checking out this initial website</b></h4>
                    </div>

                </div>
            </div>
            <div class="features border-bottom border-light mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-3 text-start ">
                        <div class="card mb-3 " style="width: 18rem;">
                            <div class="card-body">
                                <div class="text-start mb-3"><img src="{{ asset('img/html1.png') }}" class="html"
                                        width="50" alt=""></div>
                                <p class="card-text">HTML ( HyperText Markup Language ) </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="card mb-3 text-start pb-4" style="width: 18rem;">
                            <div class="card-body">
                                <div class="text-start mb-3"><img src="{{ asset('img/css.png') }}" class="css"
                                        width="50" alt=""></div>
                                <p class="card-text">CSS ( Casecading Style Sheets )</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="card mb-3 text-start pb-4" style="width: 18rem;">
                            <div class="card-body">
                                <div class="text-start mb-3"><img src="{{ asset('img/js.png') }}" class="js"
                                        width="50" alt=""></div>
                                <p class="card-text">JS ( JavaScript )</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my_hobby">
                <div><h2>My Hobby</h2></div>
            </div>

            <div class="card-group">
                <div class="card border border-0">
                    <img src="{{asset('img/anime (1).jpg')}}" class="card-img-top hobby" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card border border-0">
                    <img src="{{asset('img/anime (2).jpg')}}" class="card-img-top hobby" height="227" alt="...">
                    <div class="card-body  border-start border-end border-dark ">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card border border-0">
                    <img src="{{asset('img/anime (3).jpg')}}" class="card-img-top hobby" height="227" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end about --}}
    {{-- Contact --}}
    <div id="contact">
        <div class="container contact1">
            <div class="row">
                <div class="col-md-5">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est minus perferendis aut alias
                        officiis porro, obcaecati facilis ratione quod ducimus modi magni eligendi natus dicta debitis?
                        Tempora, temporibus! Ipsam, animi.</p>
                </div>
                <div class="col-md-7">
                    <div class="form-floating">
                        <input type="email" class="form-control mb-3" id="floatingPassword" placeholder="Email ">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Username">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Commants</label>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-warning" type="button"><b>Kirim</b></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Contact end --}}

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
                        <a href="#home" class="text-white text-decoration-none">Home</a>
                    </p>
                    <p>
                        <a href="#about" class="text-white text-decoration-none">About</a>
                    </p>
                    <p>
                        <a href="#contact" class="text-white text-decoration-none">Contact</a>
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
