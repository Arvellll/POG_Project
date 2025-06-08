@extends('base.app')
@section('title','homepage')
@section('content')

<div class="p-homepage">
@include('backoffice.components.sidebar')
    <div class="content">
        @include('backoffice.components.navbar',[
            'title' => 'Scoreboard Operator / Detail',
            'backbtn' => '',
            ])
        <div class="inner-content">
            <div class="card-wrapper">
                @include('backoffice.components.card',[
                    'title' => 'Total Match',
                    'subtitle' => '104',
                    'img' => asset('assets/card-bola.svg')
                    ])
            </div>
            <div class="card-side">
                <div class="white-card">
                    <h4>Informasi Operator</h4>
                    <hr>
                    <div class="whitecard-inner-bottom">
                        <div class="whitecard-bottom">
                            <p>Nama Operator</p>
                            <span>Operator 1</span>
                        </div>
                        <div class="whitecard-bottom">
                            <p>Email</p>
                            <span>operator1@gmail.com</span>
                        </div>
                    </div>
                    <div class="white-card-inner">
                        <p>Tanggal Bergabung</p>
                        <span>24 Maret 2024</span>
                    </div>
                    
                </div>
                <div class="kartu-score">
                    <div class="judul-atas">
                        <img src="{{asset('assets/yellow.svg')}}" alt="">
                        <p>Match Berlangsung</p>
                    </div>
                    <div class="match-card-content">
                        <div class="match-inner">
                            <img src="{{asset('assets/indonesia.svg')}}" alt="">
                            <h2>INDONESIA</h2>
                        </div>
                        <div class="match-inner-center">
                            <h4>2 : 2</h4>
                            <h6>45 Min</h6>
                            <span>Kick Off</span>
                        </div>
                        <div class="match-inner">
                            <img src="{{asset('assets/bahrain.svg')}}" alt="">
                            <h2>BAHRAIN</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="white-card">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="match-tab" data-bs-toggle="tab" data-bs-target="#daftarMatch" type="button" role="tab" aria-controls="daftarMatch" aria-selected="true">
                        Daftar Match
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="participant-tab" data-bs-toggle="tab" data-bs-target="#historyAction" type="button" role="tab" aria-controls="historyAction" aria-selected="false">
                        History Action Operator
                        </button>
                    </li>
                </ul>
                <div class="search-engine">
                    @include('backoffice.components.search')
                    <div class="status">
                         <button class="btn-status" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Liga
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15.8334 7.5L10 13.3333L4.16669 7.5" stroke="#818489" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>    
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                <li><a class="dropdown-item"data-value="Aktif">Aktif</a></li>
                                <li><a class="dropdown-item"data-value="Tidak Aktif">Tidak Aktif</a></li>
                            </ul>
                    </div>
                    @include('backoffice.components.status')
                        
                </div>
                <div class="tab-content" id="myTabContent">
                <!-- Tab 1: Daftar Match -->
                    <div class="tab-pane fade show active" id="daftarMatch" role="tabpanel" aria-labelledby="match-tab">
                        <!-- Tabel Match -->
                        <div class="table-responsive">
                        <table class="table" id="jadwalTable">
                            <thead>
                            <tr>
                                <th>Nama Pertandingan</th>
                                <th>Kick Off</th>
                                <th class="skor">Team Bertanding</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width:207px">FIFA 2026 (Kualifikasi)</td>
                                <td style="width:207px">10 Desember 2024, 19:00 - 21:00 WIB</td>
                                <td class="gmbr">
                                    <img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia 
                                    vs 
                                    Bahrain <img src="{{asset('assets/bahrain-small.svg')}}" alt="logo" width="24"></div></td>
                                <td><span class="badge-status badge-selesai">Selesai</span></td>
                                <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <g clip-path="url(#clip0_17_1197)">
                                            <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_17_1197">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                    <li><a data-bs-target="#tambahMatchModal" data-bs-toggle="modal" class="dropdown-item" href="#">Edit</a></li>
                                    <li><a href="" data-bs-target="#ubahStatus" data-bs-toggle="modal">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>English Premier League (EPL)</td>
                                <td style="width:207px">10 Desember 2024, 19:00 - 21:00 WIB</td>
                                <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs Australia <img src="{{asset('assets/australia-small.svg')}}" alt="logo" width=""></td>
                                <td><span class="badge-status badge-pending">Pending</span></td>
                                <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <g clip-path="url(#clip0_17_1197)">
                                            <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_17_1197">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                    <li><a data-bs-target="#tambahMatchModal" data-bs-toggle="modal" class="dropdown-item" href="#">Edit</a></li>
                                    <li><a href="" data-bs-target="#ubahStatus" data-bs-toggle="modal">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Serie A (Italia)</td>
                                <td style="width:207px">10 Desember 2024, 19:00 - 21:00 WIB</td>
                                <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs China <img src="{{asset('assets/china-small.svg')}}" alt="logo" width="24"></did>
                                <td><span class="badge-status badge-selesai">Selesai</span></td>
                                <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <g clip-path="url(#clip0_17_1197)">
                                            <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_17_1197">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                    <li><a data-bs-target="#tambahMatchModal" data-bs-toggle="modal" class="dropdown-item" href="#">Edit</a></li>
                                    <li><a href="" data-bs-target="#ubahStatus" data-bs-toggle="modal">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bundesliga (Jerman)</td>
                                <td style="width:207px">10 Desember 2024, 19:00 - 21:00 WIB</td>
                                <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs Iraq <img src="{{asset('assets/iraq-small.svg')}}" alt="logo" width="24"></div>
                                <td><span class="badge-status badge-pending">Pending</span></td>
                                <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <g clip-path="url(#clip0_17_1197)">
                                            <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_17_1197">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                    <li><a data-bs-target="#tambahMatchModal" data-bs-toggle="modal" class="dropdown-item" href="#">Edit</a></li>
                                    <li><a href="" data-bs-target="#ubahStatus" data-bs-toggle="modal">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ligue 1 (Prancis)</td>
                                <td style="width:207px">10 Desember 2024, 19:00 - 21:00 WIB</td>
                                <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs Arab Saudi <img src="{{asset('assets/arab-small.svg')}}" alt="logo" width="24"></td>
                                <td><span class="badge-status badge-selesai">Selesai</span></td>
                                <td>
                                <div class="dropdown">
                                    <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <g clip-path="url(#clip0_17_1197)">
                                            <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_17_1197">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                    <li><a data-bs-target="#tambahMatchModal" data-bs-toggle="modal" class="dropdown-item" href="#">Edit</a></li>
                                    <li><a href="" data-bs-target="#ubahStatus" data-bs-toggle="modal">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="historyAction" role="tabpanel" aria-labelledby="participant-tab" style="cursor: pointer;">
                        <div class="table-responsive">
                            <table id="historyTable" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Team Bertanding</th>
                                    <th>Nama Action</th>
                                    <th>Waktu</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs Bahrain <img src="{{asset('assets/bahrain-small.svg')}}" alt="logo" width="24"></div></td>
                                    <td>Score Board</td>
                                    <td>10 Desember 2024, 19:00 - 21:00 WIB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_17_1197)">
                                                    <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_17_1197">
                                                    <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Detail</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs Australia <img src="{{asset('assets/australia-small.svg')}}" alt="logo" width=""></td>
                                    <td>Warning Card</td>
                                    <td>11 Desember 2024, 19:00 - 21:00 WIB</td>
                                                                        <td>
                                        <div class="dropdown">
                                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_17_1197)">
                                                    <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_17_1197">
                                                    <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Detail</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs China <img src="{{asset('assets/china-small.svg')}}" alt="logo" width="24"></did>
                                    <td>Pergantian Pemain</td>
                                    <td>12 Desember 2024, 19:00 - 21:00 WIB</td>
                                                                        <td>
                                        <div class="dropdown">
                                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_17_1197)">
                                                    <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_17_1197">
                                                    <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Detail</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs Iraq <img src="{{asset('assets/iraq-small.svg')}}" alt="logo" width="24"></div>
                                    <td>Injury Time</td>
                                    <td>13 Desember 2024, 19:00 - 21:00 WIB</td>
                                                                        <td>
                                        <div class="dropdown">
                                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_17_1197)">
                                                    <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_17_1197">
                                                    <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Detail</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td class="gmbr"><img src="{{asset('assets/indo-small.svg')}}" alt="logo" width="24"> Indonesia vs Arab Saudi <img src="{{asset('assets/arab-small.svg')}}" alt="logo" width="24"></td>
                                    <td>Splash Screen</td>
                                    <td>14 Desember 2024, 19:00 - 21:00 WIB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_17_1197)">
                                                    <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_17_1197">
                                                    <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">Detail</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backoffice.components.modal.ubah-status')
@include('backoffice.components.modal.hapus-modal')
@include('backoffice.pages.liga.modal.tambah-match')

@push('script')
<script>
    $(document).ready(function () {
      $('#jadwalTable').DataTable({
        pageLength: 10,
        lengthChange: false,
        ordering: true
      });
    });

    $(document).ready(function () {
      $('#historyTable').DataTable({
        pageLength: 10,
        lengthChange: false,
        ordering: true
      });
    });

</script>
    
@endpush
@endsection