@extends('layouts.app')

@section('title', 'Skills')

@section('content')

<section class="section">
    <div class="container">

        <h2 class="section-title">
            My <span>Skills</span>
        </h2>

        <p style="color:var(--gray); margin-bottom:30px">
            Beberapa bidang kemampuan yang sedang saya
            pelajari dalam Teknologi Rekayasa Internet.
        </p>

        <div class="card">

            <div class="skill">
                <div class="skill-info">
                    <span>HTML & CSS</span>
                    <span>Dasar</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-progress"
                         style="width:40%"></div>
                </div>
            </div>

            <div class="skill">
                <div class="skill-info">
                    <span>PHP & Laravel</span>
                    <span>Dasar</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-progress"
                         style="width:30%"></div>
                </div>
            </div>

            <div class="skill">
                <div class="skill-info">
                    <span>Database MySQL</span>
                    <span>Dasar</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-progress"
                         style="width:35%"></div>
                </div>
            </div>

            <div class="skill">
                <div class="skill-info">
                    <span>Jaringan Komputer</span>
                    <span>Dasar</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-progress"
                         style="width:40%"></div>
                </div>
            </div>

        </div>

        <p style="color:var(--gray); margin-top:20px">
            *Persentase merupakan ilustrasi awal dan dapat
            disesuaikan dengan kemampuan sebenarnya.
        </p>

    </div>
</section>

@endsection
