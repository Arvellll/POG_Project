<div class="modal fade" id="unggahVideo" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="logoutModalLabel">Ubah Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
       <form id="uploadForm" enctype="multipart/form-data">
          <div class="content">
            <label for="contractFile" class="form-label">File Video</label>
            <div class="file-input-container">
            <input type="text" class="file-name" placeholder="mp4,mav, max 100mb" readonly>
            <label for="fileInput" class="upload-btn1">Unggah</label>
            <input type="file" id="fileInput" accept="video/mp4" hidden>
            </div>
          </div>
        </form>
      </div>
      <hr style="margin:0px">
      <div class="modal-footer">
        @include('backoffice.components.button-modal',[
            'title' => 'Batal',
            'title2' => 'Simpan'
            ])
        </form>
      </div>
    </div>
  </div>
</div>