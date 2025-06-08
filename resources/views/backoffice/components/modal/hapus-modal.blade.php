<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="logoutModalLabel">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="logout-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="91" height="90" viewBox="0 0 91 90" fill="none">
            <path d="M78.8501 22.4249C66.3626 21.1874 53.8001 20.5499 41.2751 20.5499C33.8501 20.5499 26.4251 20.9249 19.0001 21.6749L11.3501 22.4249" stroke="#E62129" stroke-width="4.95436" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M31.9751 18.6375L32.8001 13.725C33.4001 10.1625 33.8501 7.5 40.1876 7.5H50.0126C56.3501 7.5 56.8376 10.3125 57.4001 13.7625L58.2251 18.6375" stroke="#E62129" stroke-width="4.95436" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M57.1371 82.5H33.0621C22.5996 82.5 22.2621 77.925 21.8496 72.0375L19.4121 34.275" stroke="#E62129" stroke-width="4.95436" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M70.7881 34.275L68.3506 72.0375" stroke="#E62129" stroke-width="4.95436" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M38.8379 61.875H51.3254" stroke="#E62129" stroke-width="4.95436" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M48.1743 46.875H54.4743" stroke="#E62129" stroke-width="4.95436" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M35.7251 46.875H38.8376" stroke="#E62129" stroke-width="4.95436" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <p>Anda yakin ingin menghapus data ini?</p>
      </div>
      <hr style="margin:0px">
      <div class="modal-footer">
          @include('backoffice.components.button-modal',[
            'title' => 'Batal',
            'title2' => 'Ya, Hapus'
            ])
        </form>
      </div>
    </div>
  </div>
</div>