<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="logoutModalLabel">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="logout-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0105 43.0001C12.0105 25.885 25.885 12.0105 43.0001 12.0105C60.1152 12.0105 73.9897 25.885 73.9897 43.0001C73.9897 60.1152 60.1152 73.9897 43.0001 73.9897C25.885 73.9897 12.0105 60.1152 12.0105 43.0001ZM43.0001 22.6355C44.4671 22.6355 45.6563 23.8247 45.6563 25.2917V43.0001C45.6563 44.4671 44.4671 45.6563 43.0001 45.6563C41.5331 45.6563 40.3438 44.4671 40.3438 43.0001V25.2917C40.3438 23.8247 41.5331 22.6355 43.0001 22.6355ZM35.9167 29.1246C35.9167 28.4774 35.2459 28.0528 34.6836 28.3733C29.6029 31.2683 26.1772 36.7341 26.1772 43.0001C26.1772 52.2911 33.709 59.823 43.0001 59.823C52.2911 59.823 59.823 52.2911 59.823 43.0001C59.823 36.7341 56.3973 31.2683 51.3166 28.3733C50.7542 28.0528 50.0834 28.4774 50.0834 29.1246V33.4949C50.0834 33.7674 50.2102 34.0231 50.4185 34.1988C52.921 36.3102 54.5105 39.4695 54.5105 43.0001C54.5105 49.3571 49.3571 54.5105 43.0001 54.5105C36.6431 54.5105 31.4897 49.3571 31.4897 43.0001C31.4897 39.4695 33.0792 36.3102 35.5817 34.1988C35.7899 34.0231 35.9167 33.7674 35.9167 33.4949V29.1246Z" fill="#E62129"/>
            </svg>
        </div>
        <p>Anda yakin ingin keluar dari akun ini?<br>Anda harus login terlebih dahulu sebelum masuk akun</p>
      </div>
      <hr style="margin:0px">
      <div class="modal-footer">
        <div class="btn-modal">
            <button class="btn-modal-1" data-bs-dismiss="modal">Batal</button>
            <button class="btn-modal-2" onclick="window.location='{{ route('login') }}'">Ya, Keluar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>