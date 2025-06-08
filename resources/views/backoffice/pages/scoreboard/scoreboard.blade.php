@extends('base.app')
@section('title','homepage')
@section('content')

<div class="p-homepage">
@include('backoffice.components.sidebar')
    <div class="content">
        @include('backoffice.components.navbar',[
            'title' => 'Daftar Scoreboard Operator'
            ])
        <div class="inner-content">
            <div class="white-card">
                <div class="search-engine">
                    @include('backoffice.components.search')
                    @include('backoffice.components.status')
                    @include('backoffice.components.red-button',[
                        'namabtn' => 'Operator',
                        'url' => route('dashboard')
                        ])
                </div>
                <div class="datatables">
                    <table class="display" id="operatorTable">
                        <thead>
                            <tr>
                                <th class="sortable">Nama Operator</th>
                                <th>Email</th>
                                <th class="sortable">Total Match</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Operator 1</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-active">Active</span></td>
                                <td>
                                <div class="dropdown">
                                        <button class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_4_1972)">
                                                    <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4_1972">
                                                    <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('score.detail')}}">Detail</a></li>
                                        <li><a data-bs-target="#tambahMatchModal" data-bs-toggle="modal" href="#">Edit</a></li>
                                        <li><a href="" data-bs-target="#ubahStatus" data-bs-toggle="modal">Ubah Status</a></li>
                                        <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 2</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-deactive">Deactive</span></td>
                                <td>
                                    <div class="dropdown">
                                    <button class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <g clip-path="url(#clip0_4_1972)">
                                                <path d="M6 10.5C4.9 10.5 4 11.4 4 12.5C4 13.6 4.9 14.5 6 14.5C7.1 14.5 8 13.6 8 12.5C8 11.4 7.1 10.5 6 10.5ZM18 10.5C16.9 10.5 16 11.4 16 12.5C16 13.6 16.9 14.5 18 14.5C19.1 14.5 20 13.6 20 12.5C20 11.4 19.1 10.5 18 10.5ZM12 10.5C10.9 10.5 10 11.4 10 12.5C10 13.6 10.9 14.5 12 14.5C13.1 14.5 14 13.6 14 12.5C14 11.4 13.1 10.5 12 10.5Z" fill="#1E1E1E"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4_1972">
                                                <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <a href="{{route('score.detail')}}">Detail</a>
                                    <a data-bs-target="#tambahMatchModal" data-bs-toggle="modal" href="#">Edit</a>
                                    <a href="" data-bs-target="#ubahStatus" data-bs-toggle="modal">Ubah Status</a>
                                    <a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 3</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-active">Active</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 4</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-deactive">Deactive</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 5</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-active">Active</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 6</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-deactive">Deactive</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 7</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-active">Active</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 8</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-deactive">Deactive</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 9</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-active">Active</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Operator 10</td>
                                <td>operator1@gmail.com</td>
                                <td>104 Match</td>
                                <td><span class="status-deactive">Deactive</span></td>
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
                                    <li><a data-bs-target="#ubahStatus" data-bs-toggle="modal" class="dropdown-item" href="#">Ubah Status</a></li>
                                    <li><a data-bs-target="#hapusModal" data-bs-toggle="modal" href="#">Hapus</a></li>
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

@include('backoffice.components.modal.ubah-status')
@include('backoffice.components.modal.hapus-modal')
@include('backoffice.pages.liga.modal.tambah-match')
@push('script')
    <script>
    $(document).ready(function () {
      $('#operatorTable').DataTable({
        pageLength: 10,
        lengthChange: false,
        ordering: true
      });
    });
    </script>
@endpush
@endsection