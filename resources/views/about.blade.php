@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="section">
    <div class="container">

        <h2 class="section-title">
            About <span>Me</span>
        </h2>

        <div class="card">
            <h2 style="color:var(--orange)">
                Aptoro Nirigi
            </h2>

            <p style="margin:15px 0">
                Saya adalah mahasiswa semester 3 jurusan
                Teknologi Rekayasa Internet di Politeknik
                Amamapare Timika.
            </p>

            <div class="grid">
                <div>
                    <p><strong>Nama:</strong> Aptoro Nirigi</p>
                    <p><strong>NIM:</strong> 2511007</p>
                    <p><strong>Tempat Lahir:</strong> Wuarem</p>
                    <p><strong>Tanggal Lahir:</strong> 16 Juni 2004</p>
                </div>

                <div>
                    <p><strong>Semester:</strong> 3</p>
                    <p><strong>Jurusan:</strong>
                        Teknologi Rekayasa Internet
                    </p>
                    <p><strong>Kampus:</strong>
                        Politeknik Amamapare Timika
                    </p>
                    <p><strong>Hobi:</strong> Bermain Bola</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
