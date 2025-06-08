@extends('base.app')
@section('title','homepage')
@section('content')

<div class="p-homepage">
@include('backoffice.components.sidebar')
    <div class="content">
        @include('backoffice.components.navbar',[
            'title' => 'Daftar Team / Tambah Team',
            'backbtn' => '',
            ])
        <div class="inner-content">
            <div class="white-card">
                <div>
                    <div class="card-side">
                        <div class="unggah-foto">
                            <h4>Logo Team</h4>
                            <span>
                                Format File : JPG, PNG<br>
                                Max 2 MB
                            </span>
                            <input type="file" id="uploadLogo" accept=".jpg,.png" style="display: none;">
                            <button id="triggerUpload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M13.3332 13.3333L9.99984 10L6.6665 13.3333" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.99988 10V17.5" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94617 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.49991H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.3332 13.3333L9.99984 10L6.6665 13.3333" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Unggah File
                            </button>
                            <div class="preview" id="previewContainer" style="display:none;">
                                <img id="previewImage" src="#" alt="Pratinjau Logo" style="">
                            </div>
                            <div class="error" id="uploadError" style="color: red; font-size: 0.9em; margin-top: 5px;"></div>
                        </div>
                            <div class="biodata-team">
                                <div class="manager">
                                <h4>Nama Team</h4>
                                <input type="text" placeholder="Nama Team">
                                </div>
                                <div class="biodata-team-inner">
                                    <div class="manager">
                                        <h4>Nama Manager / Pelatih</h4>
                                        <input type="text" placeholder="Nama Manager">
                                    </div>
                                    <div class="manager">
                                        <h4>Regional</h4>
                                        <select placeholder="Pilih" name="" id="team1">
                                            <option selected disabled value="" placeholder="Pilih">Pilih</option>
                                            <option value="" placeholder="Pilih"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="manager">
                                <h4>Nama Team</h4>
                                <input type="text" placeholder="Masukkan Keterangan">
                                </div>                                
                            </div>   
                    </div>
                </div>
            </div>
            <div class="white-card">
                <h4>Daftar Pemain</h4>
                <hr>
                <div class="search-engine">
                    @include('backoffice.components.search')
                    <div class="red-button">
                    <button class="red-btn" data-bs-target="#tambahPemain" data-bs-toggle="modal">
                        <span>+</span>
                        <p>Pemain</p>
                    </button>
                </div>
                </div>
                <div class="datatables">
                     <table id="daftarTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Pemain</th>
                            <th>No. Punggung</th>
                            <th>Posisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="player-info">
                                    <img src="{{asset('assets/martenpaess.svg')}}" alt="Maarten Paes" class="player-image">
                                    Maarten Paes
                                </div>
                            </td>
                            <td>01</td>
                            <td>Kiper</td>
                            <td><div class="dropdown">
                                <button class="btn-action">
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
                                <div class="dropdown-menu">
                                <a href="#">Detail</a>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="player-info">
                                    <img src="{{asset('assets/martenpaess.svg')}}" alt="Jay Idzes" class="player-image">
                                    Jay Idzes
                                </div>
                            </td>
                            <td>20</td>
                            <td>Back</td>
                            <td><div class="dropdown">
                                <button class="btn-action">
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
                                <div class="dropdown-menu">
                                <a href="#">Detail</a>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="player-info">
                                    <img src="{{asset('assets/martenpaess.svg')}}" alt="Ricky Kambuaya" class="player-image">
                                    Ricky Kambuaya
                                </div>
                            </td>
                            <td>54</td>
                            <td>Gelandang</td>
                            <td><div class="dropdown">
                                <button class="btn-action">
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
                                <div class="dropdown-menu">
                                <a href="#">Detail</a>
                                </div>
                            </div>
                            </td>
                        </tr>
                        </tbody>
                </table>
                </div>
            </div>
            <button class="simpan ">
                Simpan
            </button>
        </div>
    </div>
</div>
@include('backoffice.pages.team.modal.tambah-pemain')
@push('script')
<script>
    $(document).ready(function () {
      $('#daftarTable').DataTable({
        pageLength: 10,
        lengthChange: false,
        ordering: true
      });
    });

    const uploadLogo = document.getElementById('uploadLogo');
    const triggerUpload = document.getElementById('triggerUpload');
    const previewImage = document.getElementById('previewImage');
    const previewContainer = document.getElementById('previewContainer');
    const uploadError = document.getElementById('uploadError');

    triggerUpload.addEventListener('click', () => {
        uploadLogo.click();
    });

    uploadLogo.addEventListener('change', (event) => {
        const file = event.target.files[0];

        if (file) {
            // Validasi format
            const allowedTypes = ['image/jpeg', 'image/png'];
            if (!allowedTypes.includes(file.type)) {
                uploadError.textContent = 'Format file tidak didukung. Hanya JPG dan PNG yang diperbolehkan.';
                previewContainer.style.display = 'none';
                return;
            }

            // Validasi ukuran (dalam bytes, 2MB = 2 * 1024 * 1024)
            const maxSize = 2 * 1024 * 1024;
            if (file.size > maxSize) {
                uploadError.textContent = 'Ukuran file melebihi batas maksimum 2MB.';
                previewContainer.style.display = 'none';
                return;
            }

            uploadError.textContent = ''; // Hapus pesan error

            // Pratinjau gambar
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
                previewContainer.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            previewImage.src = '#';
            previewImage.style.display = 'none';
            previewContainer.style.display = 'none';
        }
    });
</script>
    
@endpush

@endsection