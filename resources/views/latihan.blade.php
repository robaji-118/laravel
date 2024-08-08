<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>latihan laravel</title>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3><span>Raybe</span></h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">
                            <p>About</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">
                            <p>Contact</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- home --}}
    <div class="home">
        <div class="container text-center home ">
            <div class="row justify-content-evenly">
                <div class="col-md-4 text-center">
                    <div class="home2">
                        <h1>Hii! Developers <span class="bla">I'am Rojaby</span></h1>
                        <p><b>My job as a UI/UX & Front end</b></p>
                        <h4 class="">
                            <a href="#" class="fa fa-facebook ps-2"></a>
                            <a href="#" class="fa fa-instagram ps-2"></a>
                            <a href="#" class="fa fa-whatsapp ps-2"></a>
                            <a href="#" class="fa fa-github ps-2"></a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/toji.png') }} " class="toji" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- end home --}}
    {{-- Keterangan --}}
    <div id="keterangan">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center">
                    <h3>Home</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nisi corrupti quod! Fugiat
                        similique blanditiis cum excepturi modi fuga voluptatum! Inventore in rem vero saepe cumque
                        incidunt? Iste, iusto ipsa.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nisi corrupti quod! Fugiat
                        similique blanditiis cum excepturi modi fuga voluptatum! Inventore in rem vero saepe cumque
                        incidunt? Iste, iusto ipsa.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Contact</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nisi corrupti quod! Fugiat
                        similique blanditiis cum excepturi modi fuga voluptatum! Inventore in rem vero saepe cumque
                        incidunt? Iste, iusto ipsa.</p>
                </div>
            </div>
        </div>

    </div>
    {{-- Keterangan end --}}
    {{-- about --}}
    <div id="about">
        <div class="container ">
            <div class="card-group">
                <div class="card kartu">
                    <img src="{{ asset('img/Itadori.jpg') }}" class="card-img-top itadori" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card kartu">
                    <img src="{{ asset('img/9653436.jpg') }}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card ">
                    <img src="{{ asset('img/download (5).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('img/sukuna.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/2.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/3.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
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
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Username">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control mb-3" id="floatingPassword" placeholder="Email ">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact end --}}

    {{-- footer --}}
    <div id="footer">
        <div class="footer1 container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <p>Raybe</p>
                    <p>Develop by Rojaby </p>
                    <p>Copyright &copy; 2024</p>
                </div>
                <div class="col-md-4 text-center">
                    <p>Home</p>
                    <p>About</p>
                    <p>Contact</p>
                </div>
                <div class="col-md-4 text-center">
                    <p>di dukung oleh :</p>
                    <p>Trendly Walk</p>
                    <p>Spacond</p>
                </div>
            </div>
        </div>
    </div>
    {{-- footer end --}}


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
