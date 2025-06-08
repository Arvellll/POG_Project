<div class="modal fade" id="tambahMatchModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="logoutModalLabel">Tambah Match</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label for="kickoff-date">Kick Off</label>
        <div class="input-date-wrapper">
            <input class="date" type="date" placeholder="dd/mm/yyyy">
           
        </div>

        <div class="time-range">
            <div class="input-time-wrapper">
            <input type="time" id="time-start">
            
            </div>
            <span class="separator">-</span>
            <div class="input-time-wrapper">
            <input type="time" id="time-end">
            
            </div>
        </div>
        </div>

        <div class="form-group">
        <label for="team1">Team Bertanding</label>
        <div class="team-select">
            <select id="team1">
            <option selected disabled>Pilih</option>
            <!-- Options here -->
            </select>
            <span class="vs-text">VS</span>
            <select id="team2">
            <option selected disabled>Pilih</option>
            <!-- Options here -->
            </select>
        </div>
        </div>

      </div>
      <hr style="margin:0px">
      <div class="modal-footer">
        @include('backoffice.components.button-modal',[
            'title' => 'Batal',
            'title2' => 'Tambah'
            ])
        </form>
      </div>
    </div>
  </div>
</div>