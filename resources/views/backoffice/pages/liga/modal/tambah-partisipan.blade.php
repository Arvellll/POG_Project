<div class="modal fade" id="tambahPartisipan" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="logoutModalLabel">Tambah Partisipan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
       <div class="status">
            <label for="status" class="form-label">Team</label>
            <select style="color: var(--Neutral-04, #B0B3B8);" class="form-select" id="status">
                <option style="color: var(--Neutral-04,rgb(0, 0, 0));" selected disabled>Pilih</option>
                <!-- <option style="color: var(--Neutral-04,rgb(0, 0, 0));" value="aktif">Berlangsung</option>
                <option style="color: var(--Neutral-04,rgb(0, 0, 0));" value="non-aktif">Pending</option>
                <option style="color: var(--Neutral-04,rgb(0, 0, 0));" value="non-aktif">Selesai</option> -->
            </select>
        </div>
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