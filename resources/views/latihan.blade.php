@extends('main.main')

@section('title', 'Home')

@section('nav')

    {{-- home --}}


    <div id="home">
        <div class="container text-center home  ">
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
                    <img src="{{ asset('img/toji.png') }} " class="toji" alt="">
                </div>
            </div>
        </div>

        <div class="keterangan">
            <div class="container">
                <div class="row justify-content-evenly keterangan1">
                    <div class="col-md-5">
                        <div class="keterangan-web text-center">
                            <p class="hasil">"janganlah takut untuk selalu mencoba hal baru, selagi masih bisa mencoba"
                            </p>
                            
                            <p class="text-start pencipta">~Rojabby~</p>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div><img src="{{ asset('img/toji (3).png') }}" height="350px" alt="" class="toji2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{-- end home --}}








@endsection
