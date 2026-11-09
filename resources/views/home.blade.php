@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="container">
        <div class="hero-content">

            <p class="hero-subtitle">
                HELLO, WELCOME TO MY PORTFOLIO
            </p>

            <h1>
                Saya <span>Aptoro Nirigi</span>
            </h1>

            <h2>
                Mahasiswa Teknologi Rekayasa Internet
            </h2>

            <p>
                Saya merupakan mahasiswa Politeknik Amamapare
                Timika yang memiliki ketertarikan dalam bidang
                teknologi, jaringan komputer, dan pengembangan
                website.
            </p>

            <a href="{{ route('about') }}" class="btn">
                Tentang Saya
            </a>

            <a href="{{ route('projects') }}"
               class="btn"
               style="margin-left:10px">
                Lihat Proyek
            </a>

        </div>
    </div>
</section>

@endsection
