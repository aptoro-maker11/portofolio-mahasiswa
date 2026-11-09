
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<section class="section">
    <div class="container">

        <h2 class="section-title">
            My <span>Dashboard</span>
        </h2>

        <p style="color:var(--gray); margin-bottom:25px">
            Ringkasan informasi portofolio Aptoro Nirigi.
        </p>

        <div class="grid">

            <div class="card">
                <h3 style="color:var(--orange)">
                    Nama Mahasiswa
                </h3>
                <h2>{{ $portfolio?->name ?? 'Belum tersedia' }}</h2>
            </div>

            <div class="card">
                <h3 style="color:var(--orange)">
                    NIM
                </h3>
                <h2>{{ $portfolio?->nim ?? 'Belum tersedia' }}</h2>
            </div>

            <div class="card">
                <h3 style="color:var(--orange)">
                    Semester
                </h3>
                <h2>{{ $portfolio?->semester ?? 'Belum tersedia' }}</h2>
            </div>

            <div class="card">
                <h3 style="color:var(--orange)">
                    Jurusan
                </h3>
                <p>{{ $portfolio?->major ?? 'Belum tersedia' }}</p>
            </div>

        </div>

        <div class="card" style="margin-top:25px">
            <h3 style="color:var(--orange)">
                Status Website
            </h3>
            <p>Website portofolio sedang dikembangkan.</p>
        </div>

    </div>
</section>

@endsection
