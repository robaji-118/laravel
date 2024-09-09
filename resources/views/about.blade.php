@extends('main.main')

@section('title', 'About')

@section('nav')
    {{-- about --}}
    <div class="container identitas">
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
                    <h3 class="animate__animated animate__fadeInUp animate__delay-1s">Rojabby</h3>
                    <p class=" animate__animated animate__fadeInUp animate__delay-1s">Age : 17th</p>
                    <p class=" animate__animated animate__fadeInUp animate__delay-1s">Location : Pasuruan, Wonorejo,
                        Sambisirah</p>
                    <p class=" animate__animated animate__fadeInUp animate__delay-1s">No Phone : 088801793515 </p>
                    <p class=" animate__animated animate__fadeInUp animate__delay-1s">Status : Developer </p>
                    <p class=" animate__animated animate__fadeInUp animate__delay-1s">Email :
                        rojabbygabteng@gmail.com</p>
                    <p class=" animate__animated animate__fadeInUp animate__delay-1s">Brithday : 11 - August - 2007
                    </p>
                </div>
                <div class="col-md-4 text-center saya_cp2">
                    <h4 class=" animate__animated animate__fadeInUp animate__delay-1s"><b>Thank you for visiting and
                            checking out this initial website</b></h4>
                </div>

            </div>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="" fill-opacity="1"
            d="M0,256L48,256C96,256,192,256,288,234.7C384,213,480,171,576,165.3C672,160,768,192,864,186.7C960,181,1056,139,1152,144C1248,149,1344,203,1392,229.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <div id="about">
        <div class="container ">
            <div class="skill">
                <div class="row justify-content-end">
                    <div class="col-md-2 text-end">
                        <h2>My Skill</h2>
                    </div>
                </div>
            </div>

            <div class="features border-bottom border-light ">
                <div class="row justify-content-center">
                    <div class="col-md-3 ">
                        <div class="card " style="width: 18rem;">
                            <div class="card-body">
                                <div class="text-start mb-3"><img src="{{ asset('img/html1.png') }}" class="html"
                                        width="50" alt=""></div>
                                <p class="card-text text-start">HTML ( HyperText Markup Language ) </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="card  text-start pb-4" style="width: 18rem;">
                            <div class="card-body">
                                <div class="text-start mb-3"><img src="{{ asset('img/css.png') }}" class="css"
                                        width="50" alt=""></div>
                                <p class="card-text">CSS ( Casecading Style Sheets )</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="card  text-start pb-4" style="width: 18rem;">
                            <div class="card-body">
                                <div class="text-start mb-3 "><img src="{{ asset('img/js.png') }}" class="js"
                                        width="50" alt=""></div>
                                <p class="card-text">JS ( JavaScript )</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my_hobby">
                <div class="row">
                    <div class="col-md-2 ">
                        <h2 class="">My Hobby</h2>
                    </div>
                </div>
            </div>

            <div class="card-group">
                <div class="card border border-0">
                    <img src="{{ asset('img/anime (6).jpg') }}" class="card-img-top hobby" height="227" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Menonton Film / anime</h5>
                        <p class="card-text">Saya suka menonton anime karena dapat menyantaikan pikiran dan alur cerita
                            nya menarik menarik</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 1 week ago</small></p>
                    </div>
                </div>
                <div class="card border border-0">
                    <img src="{{ asset('img/anime (5).jpg') }}" class="card-img-top hobby" height="227" alt="...">
                    <div class="card-body  border-start border-end border-dark ">
                        <h5 class="card-title">Bermain game</h5>
                        <p class="card-text">Saya ini juga suka karena dapat menyantaikan pikiran walau kalau kalah
                            biasanya marah </p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 1 week ago</small></p>
                    </div>
                </div>
                <div class="card border border-0">
                    <img src="{{ asset('img/anime (4).jpg') }}" class="card-img-top hobby" height="227" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mendengarkan musik</h5>
                        <p class="card-text">Mendengar musik ini biasnya saya sembari dengan mengerjakan tugas, karena
                            dapat lebih fokus dan jika mengerjakan tidak sunyi</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 1 week ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end about --}}
@endsection
