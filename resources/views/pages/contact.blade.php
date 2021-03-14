@extends('layouts.app')
@section('title', 'Web')
@section('content')
<section class="contact" id="contact">
    <div class="container">
        <div class="row pt-5 mb-4" style="margin-top: 10px;">
            <div class="col text-center">
                <h1><u>Contact</u></h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4" style="margin-top: 70px;">
                <div class="card bg-danger text-white mb-4 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Me</h5>
                        <p class="card-text">Silahkan beri masukan atau pertanyaan di kolom Message... <br> <br> 
                        Jangan lupa untuk follow dan pantau terus akun sosial media kami dibawah ini.</p>
                    </div>
                </div>
                <center><p>IG : KurniaJ</p></center>
                <center><p>FaceBook : KurniaJuanugraha</p></center>
            </div>

        <div class="col-lg-6">
            <form>
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-warning btn-round">Send Message</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">MODAL</button>
                    <x-modal>
                        halo
                    </x-modal>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>
@endsection
