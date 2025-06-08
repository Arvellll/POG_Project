    <div class="modal fade" id="tambahPemain" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="logoutModalLabel">Tambah Pemain</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
                <div class="unggah-foto-modal">
                                <h4>Logo Team</h4>
                                <span>
                                    Format File : JPG, PNG<br>
                                    Max 2 MB
                                </span>
                                <input type="file" id="uploadLogoo" accept=".jpg,.png" style="display: none;">
                                <button id="triggerUploadd">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M13.3332 13.3333L9.99984 10L6.6665 13.3333" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.99988 10V17.5" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94617 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.49991H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.3332 13.3333L9.99984 10L6.6665 13.3333" stroke="#E62129" stroke-width="0.555556" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Unggah File
                                </button>
                                <div class="preview" id="previewContainerr" style="display:none;">
                                    <img id="previewImagee" src="#" alt="Pratinjau Logo" style="">
                                </div>
                                <div class="error" id="uploadErrorr" style="color: red; font-size: 0.9em; margin-top: 5px;"></div>
                            </div>
                            <!-- <form method="POST" action="URL_MU" enctype="multipart/form-data">
                            @csrf
                            <div class="unggah-foto-modal">
                                <h4>Logo Team</h4>
                                <span>Format File : JPG, PNG<br>Max 2 MB</span>
                                <input type="file" id="uploadLogoo" name="logo" accept=".jpg,.png" style="display: none;">
                                <button type="button" id="triggerUploadd">Unggah File</button>
                                <div class="preview" id="previewContainerr" style="display:none;">
                                    <img id="previewImagee" src="#" alt="Pratinjau Logo">
                                </div>
                                <div class="error" id="uploadErrorr" style="color: red; font-size: 0.9em; margin-top: 5px;"></div>
                            </div>
                        
                         </form> -->

                <div class="modal-inner">
                    <h4>Nama Pemain</h4>
                    <input placeholder="Masukkan Nama" type="text" name="" id="">
                </div>
                <div class="modal-inner">
                    <h4>No. Punggung</h4>
                    <input placeholder="Masukkan Nomor" type="text" name="" id="">
                </div>
                <div class="modal-inner">
                    <h4>Team</h4>
                        <select style="color: var(--Neutral-04, #B0B3B8);" class="form-select" id="status">
                            <option style="color: var(--Neutral-04,rgb(0, 0, 0));" selected disabled>Pilih</option>
                        </select>
                </div>

        </div>
        <hr style="margin:0px">
        <div class="modal-footer">
            <div class="btn-modal">
                <button class="btn-modal-1" data-bs-dismiss="modal">Batal</button>
                <button class="btn-modal-2" data-bs-toggle="modal" data-bs-target="#konfirmasiModal">Simpan</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>

    @include('backoffice.pages.team.modal.konfirmasiModal')

    @push('script')
    <script>
        // $(document).ready(function () {
        // $('#daftarTable').DataTable({
        //     pageLength: 10,
        //     lengthChange: false,
        //     ordering: true
        // });
        // });

        const uploadLogoo = document.getElementById('uploadLogoo');
        const triggerUploadd = document.getElementById('triggerUploadd');
        const previewImagee = document.getElementById('previewImagee');
        const previewContainerr = document.getElementById('previewContainerr');
        const uploadErrorr = document.getElementById('uploadErrorr');

        triggerUploadd.addEventListener('click', () => {
            uploadLogoo.click();
        });

        uploadLogoo.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (file) {
                // Validasi format
                const allowedTypes = ['image/jpeg', 'image/png'];
                if (!allowedTypes.includes(file.type)) {
                    uploadErrorr.textContent = 'Format file tidak didukung. Hanya JPG dan PNG yang diperbolehkan.';
                    previewContainerr.style.display = 'none';
                    return;
                }

                // Validasi ukuran (dalam bytes, 2MB = 2 * 1024 * 1024)
                const maxSize = 2 * 1024 * 1024;
                if (file.size > maxSize) {
                    uploadErrorr.textContent = 'Ukuran file melebihi batas maksimum 2MB.';
                    previewContainerr.style.display = 'none';
                    return;
                }

                uploadErrorr.textContent = ''; // Hapus pesan error

                // Pratinjau gambar
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImagee.src = e.target.result;
                    previewImagee.style.display = 'block';
                    previewContainerr.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                previewImagee.src = '#';
                previewImagee.style.display = 'none';
                previewContainerr.style.display = 'none';
            }
        });
    </script>
        
    @endpush
        
