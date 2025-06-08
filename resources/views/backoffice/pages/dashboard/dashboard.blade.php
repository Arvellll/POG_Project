@extends('base.app')
@section('title','homepage')
@section('content')

<div class="p-homepage">
@include('backoffice.components.sidebar')
    <div class="content">
        @include('backoffice.components.navbar',[
            'title' => 'Dashboard'
            ])
        <div class="inner-content">
            <div class="card-wrapper">
                @include('backoffice.components.card',[
                    'title' => 'Total Liga',
                    'subtitle' => '104',
                    'img' => asset('assets/card-cup.svg')
                    ])
                @include('backoffice.components.card',[
                    'title' => 'Total Liga',
                    'subtitle' => '104',
                    'img' => asset('assets/card-bola.svg')
                    ])
                @include('backoffice.components.card',[
                    'title' => 'Total Liga',
                    'subtitle' => '104',
                    'img' => asset('assets/card-people.svg')
                    ])
            </div>
            <div class="berlangsung">
                <h4>Match Berlangsung</h4>
                <div class="button-next-prev">
                    <button class="slider-btn-prev swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M15 27.5C8.1 27.5 2.5 21.9 2.5 15C2.5 8.1 8.1 2.5 15 2.5C21.9 2.5 27.5 8.1 27.5 15C27.5 21.9 21.9 27.5 15 27.5ZM19.375 14.0625H12.8875L15.0375 11.9125C15.4 11.55 15.4 10.95 15.0375 10.5875C14.85 10.4 14.6125 10.3125 14.375 10.3125C14.1375 10.3125 13.9 10.4 13.7125 10.5875L9.9625 14.3375C9.6 14.7 9.6 15.3 9.9625 15.6625L13.7125 19.4125C14.075 19.775 14.675 19.775 15.0375 19.4125C15.4 19.05 15.4 18.45 15.0375 18.0875L12.8875 15.9375H19.375C19.8875 15.9375 20.3125 15.5125 20.3125 15C20.3125 14.4875 19.8875 14.0625 19.375 14.0625Z" fill="#B0B3B8"/>
                        </svg>
                    </button>
                    <button class="slider-btn-next swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M15 2.5C21.9 2.5 27.5 8.1 27.5 15C27.5 21.9 21.9 27.5 15 27.5C8.1 27.5 2.5 21.9 2.5 15C2.5 8.1 8.1 2.5 15 2.5ZM10.625 15.9375H17.1125L14.9625 18.0875C14.6 18.45 14.6 19.05 14.9625 19.4125C15.15 19.6 15.3875 19.6875 15.625 19.6875C15.8625 19.6875 16.1 19.6 16.2875 19.4125L20.0375 15.6625C20.4 15.3 20.4 14.7 20.0375 14.3375L16.2875 10.5875C15.925 10.225 15.325 10.225 14.9625 10.5875C14.6 10.95 14.6 11.55 14.9625 11.9125L17.1125 14.0625H10.625C10.1125 14.0625 9.6875 14.4875 9.6875 15C9.6875 15.5125 10.1125 15.9375 10.625 15.9375Z" fill="#E62129"/>
                        </svg>
                    </button>
                </div>

                <hr>
                            <!-- Container Swiper -->
                <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    
                   
                <div class="swiper-slide" style="width: 442px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/logo_operator.svg'),
                        'img1' => asset('assets/jepang.svg'),
                        'operator' => 'Operator 1',
                        'country' => 'JEPANG',
                        'img2' => asset('assets/suriah.svg'),
                        'country2' => 'SURIAH',
                        'time' => '00 : 42 : 19',
                        'ket' => 'Second Half'
                    ])
                    </div>

                    <div class="swiper-slide" style="width: 442px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/logo_operator.svg'),
                        'operator' => 'Operator 2',
                        'img1' => asset('assets/jepang.svg'),
                        'country' => 'JEPANG',
                        'img2' => asset('assets/suriah.svg'),
                        'country2' => 'SURIAH',
                        'time' => '00 : 42 : 19',
                        'ket' => 'Second Half'
                    ])
                    </div>

                    
                    <div class="swiper-slide" style="width: 442px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/logo_operator.svg'),
                        'operator' => 'Operator 3',
                        'img1' => asset('assets/jepang.svg'),
                        'country' => 'JEPANG',
                        'img2' => asset('assets/suriah.svg'),
                        'country2' => 'SURIAH',
                        'time' => '00 : 42 : 19',
                        'ket' => 'Second Half'
                    ])
                    </div>

                    
                   
                    <div class="swiper-slide" style="width: 442px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/logo_operator.svg'),
                        'img1' => asset('assets/jepang.svg'),
                        'operator' => 'Operator 4',
                        'country' => 'JEPANG',
                        'img2' => asset('assets/suriah.svg'),
                        'country2' => 'SURIAH',
                        'time' => '00 : 42 : 19',
                        'ket' => 'Second Half'
                    ])
                    </div>

                </div>
                </div>

            </div>

            <div class="berlangsung">
                <h4>Match Selanjutnya</h4>
                <div class="button-next-prev">
                    <button class="slider-btn-prevv swiper-button-prevv">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M15 27.5C8.1 27.5 2.5 21.9 2.5 15C2.5 8.1 8.1 2.5 15 2.5C21.9 2.5 27.5 8.1 27.5 15C27.5 21.9 21.9 27.5 15 27.5ZM19.375 14.0625H12.8875L15.0375 11.9125C15.4 11.55 15.4 10.95 15.0375 10.5875C14.85 10.4 14.6125 10.3125 14.375 10.3125C14.1375 10.3125 13.9 10.4 13.7125 10.5875L9.9625 14.3375C9.6 14.7 9.6 15.3 9.9625 15.6625L13.7125 19.4125C14.075 19.775 14.675 19.775 15.0375 19.4125C15.4 19.05 15.4 18.45 15.0375 18.0875L12.8875 15.9375H19.375C19.8875 15.9375 20.3125 15.5125 20.3125 15C20.3125 14.4875 19.8875 14.0625 19.375 14.0625Z" fill="#B0B3B8"/>
                        </svg>
                    </button>
                    <button class="slider-btn-nextt swiper-button-nextt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M15 2.5C21.9 2.5 27.5 8.1 27.5 15C27.5 21.9 21.9 27.5 15 27.5C8.1 27.5 2.5 21.9 2.5 15C2.5 8.1 8.1 2.5 15 2.5ZM10.625 15.9375H17.1125L14.9625 18.0875C14.6 18.45 14.6 19.05 14.9625 19.4125C15.15 19.6 15.3875 19.6875 15.625 19.6875C15.8625 19.6875 16.1 19.6 16.2875 19.4125L20.0375 15.6625C20.4 15.3 20.4 14.7 20.0375 14.3375L16.2875 10.5875C15.925 10.225 15.325 10.225 14.9625 10.5875C14.6 10.95 14.6 11.55 14.9625 11.9125L17.1125 14.0625H10.625C10.1125 14.0625 9.6875 14.4875 9.6875 15C9.6875 15.5125 10.1125 15.9375 10.625 15.9375Z" fill="#E62129"/>
                        </svg>
                    </button>
                </div>

                <hr>
                            <!-- Container Swiper -->
                <div class="swiper mySwiperr">
                <div class="swiper-wrapper">
                    
                   
                <div class="swiper-slide" style="width: 422px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/yellow.svg'),
                        'img1' => asset('assets/jepang.svg'),
                        'operator' => 'Countdown Kick Off',
                        'country' => 'JEPANG',
                        'img2' => asset('assets/bahrain.svg'),
                        'country2' => 'SURIAH',
                        'time' => '02 : 48 : 29',
                        'ket' => 'Kick Off'
                    ])
                    </div>

                    <div class="swiper-slide" style="width: 442px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/yellow.svg'),
                        'img1' => asset('assets/jepang.svg'),
                        'operator' => 'Countdown Kick Off',
                        'country' => 'JEPANG',
                        'img2' => asset('assets/suriah.svg'),
                        'country2' => 'SURIAH',
                        'time' => '02 : 48 : 29',
                        'ket' => 'Kick Off'
                    ])
                    </div>

                    
                    <div class="swiper-slide" style="width: 442px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/yellow.svg'),
                        'img1' => asset('assets/jepang.svg'),
                        'operator' => 'Countdown Kick Off',
                        'country' => 'JEPANG',
                        'img2' => asset('assets/bahrain.svg'),
                        'country2' => 'SURIAH',
                        'time' => '02 : 48 : 29',
                        'ket' => 'Kick Off'
                    ])
                    </div>

                    
                   
                    <div class="swiper-slide" style="width: 442px;">
                    @include('backoffice.components.match-card',[
                        'logo' => asset('assets/yellow.svg'),
                        'img1' => asset('assets/jepang.svg'),
                        'operator' => 'Countdown Kick Off',
                        'country' => 'JEPANG',
                        'img2' => asset('assets/suriah.svg'),
                        'country2' => 'SURIAH',
                        'time' => '02 : 48 : 29',
                        'ket' => 'Kick Off'
                    ])
                    </div>

                </div>
                </div>
                
            </div>

            <div class="berlangsung">
                <h4>Daftar Liga yang akan datang</h4>
                <hr>
                <div class="search-engine">
                @include('backoffice.components.search')
                </div>
                <div class="datatabel">
                <table id="leagueTable" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Liga</th>
                            <th>Total Partisipan</th>
                            <th>Total Match</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FIFA 2026 (Kualifikasi)</td>
                            <td>48 Team</td>
                            <td>104 Match</td>
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
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>English Premier League (EPL)</td>
                            <td>48 Team</td>
                            <td>104 Match</td>
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
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Serie A (Italia)</td>
                            <td>48 Team</td>
                            <td>104 Match</td>
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
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bundesliga (Jerman)</td>
                            <td>48 Team</td>
                            <td>104 Match</td>
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
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ligue 1 (Prancis)</td>
                            <td>48 Team</td>
                            <td>104 Match</td>
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

@endsection

@push('script')
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    spaceBetween: 16,
    freeMode: true,
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

   var swiper = new Swiper(".mySwiperr", {
    slidesPerView: "auto",
    spaceBetween: 16,
    freeMode: true,
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-nextt",
      prevEl: ".swiper-button-prevv",
    },
  });

  $(document).ready(function () {
        $('#leagueTable').DataTable({
            lengthMenu: [[10, 25, 50], [10, 25, 50]],
            pageLength: 10,
            ordering: true,
            pagingType: "full_numbers",
            language: {
                search: "Cari:",
                lengthMenu: "Row : _MENU_",
                info: "_TOTAL_ Entries",
                paginate: {
                    first: "First",
                    last: "Last",
                    next: ">",
                    previous: "<"
                },
            }
        });
    });
</script>


@endpush