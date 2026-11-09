@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<section class="section">
    <div class="container">

        <h2 class="section-title">
            My <span>Projects</span>
        </h2>

        <div class="grid">

            <div class="card">
                <h3 style="color:var(--orange)">
                    Website Portfolio
                </h3>
                <p>
                    Website portofolio pribadi menggunakan
                    Laravel, HTML, CSS, dan MySQL.
                </p>
                <p style="margin-top:15px">
                    <strong>Status:</strong> Sedang dibuat
                </p>
            </div>

            <div class="card">
                <h3 style="color:var(--orange)">
                    Project Jaringan Komputer
                </h3>
                <p>
                    Tempat menampilkan proyek pembelajaran
                    jaringan komputer.
                </p>
                <p style="margin-top:15px">
                    <strong>Status:</strong> Belum ditambahkan
                </p>
            </div>

            <div class="card">
                <h3 style="color:var(--orange)">
                    Project Database
                </h3>
                <p>
                    Tempat menampilkan proyek pengelolaan
                    database MySQL.
                </p>
                <p style="margin-top:15px">
                    <strong>Status:</strong> Belum ditambahkan
                </p>
            </div>

        </div>

    </div>
</section>

@endsection
