<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/giling-tambah" method="post">
        <?= csrf_field();?>
        <div class="modal-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <label class="col-form-label" for="JGabah">Jumlah Gabah &nbsp; </label>
              <input type="number" min="0" class="form-control" id="JGabah" name="JGabah" placeholder="Masukan Jumlah Gabah ..."
                autocomplete="off">
              <div class="input-group-append">
                <span class="input-group-text">.Kg</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <label class="col-form-label" for="JBeras">Jumlah Beras &nbsp;&nbsp;</label>
              <input type="number" min="0" class="form-control" id="JBeras" name="JBeras" placeholder="Masukan Jumlah Beras ..."
                autocomplete="off">
              <div class="input-group-append">
                <span class="input-group-text">.Kg</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->