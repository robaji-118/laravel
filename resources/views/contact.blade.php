@extends('main.main')

@section('title','Contact')

@section('nav')
{{-- Contact --}}
    <div class="container">
        <div class="keterangan_ctc">
                <div class="row justify-content-evenly">
                    <div class="col-md-5">
                        <div><img src="{{ asset('img/anime.jpg') }}" height="500px" alt="" class="toji3"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="keterangan_ctc2 ">
                            <p class="keterangan_ctc3">Thanks for your visit,</p>
                            <p>Jika ada yang menarik , dan jika ingin membuat project hubungi saya dengan isi di bawah ini </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>



    <div id="contact">
        <div class="container contact1">
            <div class="My_Contact">
                <div class="row justify-content-end">
                    <div class="col-md-2 text-end">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-5 text-center">
                    <p class="">Hiii brooo, If there's something offensive or the visuals are bad, you
                        can contact me using the form on the side</p>
                    <p class="border-bottom"><img src="{{ asset('img/bg_Toji.png') }}" alt=""
                            width="240"></p>
                </div>
                <div class="col-md-7">
                    <div class="form-floating">
                        <input type="email" class="form-control mb-3" id="floatingPassword" placeholder="Email ">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Username">
                        <label for="floatingPassword">Nama</label>
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
@endsection
