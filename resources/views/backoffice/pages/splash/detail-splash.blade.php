@extends('base.app')
@section('title','homepage')
@section('content')

<div class="p-homepage">
@include('backoffice.components.sidebar')
    <div class="content">
        @include('backoffice.components.navbar',[
            'title' => 'Daftar Scoreboard Operator',
            'backbtn' => '',
            ])
        <div class="inner-content">
            <div class="white-card">
                <div class="isi-wrap">
                    <div class="isi">
                        <h4>Nama File</h4>
                        <span>SponsorA.mp4</span>
                    </div>
                    <div class="isi">
                        <h4>Tanggal Ditambahkan</h4>
                        <span>10 Desember 2024</span>
                    </div>
                </div>
                <hr>
                <div class="video-wrapper">
                        <video controls poster="{{asset('assets/video-img.svg')}}">
                        <source src="SponsorA.mp4" type="video/mp4">
                        Browser tidak mendukung pemutaran video.
                        </video>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection