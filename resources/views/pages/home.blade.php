@extends('layouts.app')
@section('title', 'Web')
@section('content')
    <br>
    <center><h1>Web Sekolah Koding</h1></center>
<br><br>
        <div class="card text-center">
        <div class="card-header">
            Bahasa Pemrograman
        </div>
        <div class="card-body">
            <h3 class="card-title">C++</h3>
            <p class="card-text">C++ adalah bahasa pemrograman komputer yang dibuat oleh Bjarne Stroustrup, yang merupakan perkembangan dari bahasa C dikembangkan di Bell Labs (Dennis Ritchie). Pada awal tahun 1970-an, bahasa itu merupakan peningkatan dari bahasa sebelumnya, yaitu B.
            Pada awalnya, bahasa tersebut dirancang sebagai bahasa pemrograman yang dijalankan pada sistem Unix. Pada perkembangannya, versi ANSI (American National Standards Institute) pada bahasa pemrograman C menjadi versi dominan, meskipun versi tersebut sekarang jarang dipakai dalam pengembangan sistem dan jaringan maupun untuk sistem embedded.</p>
            <a href="#" class="btn btn-warning">Pelajari Lebih Lanjut...</a>
        </div>
        <div class="card-footer text-muted">
            2 minuts ago
        </div>
        </div>

        <div class="card text-center" style="margin-top: 30px">
        <div class="card-header">
            Bahasa Pemrograman
        </div>
        <div class="card-body">
            <h3 class="card-title">PYTHON</h3>
            <p class="card-text">Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan. Konstruksi bahasanya dan pendekatan berorientasi objek bertujuan untuk membantu pemrogram menulis kode yang jelas dan logis untuk proyek skala kecil dan besar.</p>
            <a href="#" class="btn btn-warning">Pelajari Lebih Lanjut...</a>
        </div>
        <div class="card-footer text-muted">
            2 minuts ago
        </div>
        </div>
@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
