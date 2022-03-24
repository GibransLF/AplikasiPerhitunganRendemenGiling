<?= $this -> extend('/template/master') ?>
<?= $this -> section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Rendemen Giling</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Rendemen Giling</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
  <form action="/giling-update/<?= $rendemen['id'] ?>" method="get">
              <?= csrf_field();?>
              <div class="modal-body">
              <div class="form-group">
            <div class="input-group mb-3">
              <label class="col-form-label" for="JGabah">Jumlah Gabah &nbsp; </label>
              <input type="number" min="0" class="form-control" id="JGabah" name="JGabah" value="<?= $rendemen['JGabah'] ?>" placeholder="<?= $rendemen['JGabah'] ?>"
                autocomplete="off">
              <div class="input-group-append">
                <span class="input-group-text">.Kg</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <label class="col-form-label" for="JBeras">Jumlah Beras &nbsp;&nbsp;</label>
              <input type="number" min="0" class="form-control" id="JBeras" name="JBeras" value="<?= $rendemen['JBeras'] ?>"  placeholder="<?= $rendemen['JBeras'] ?>"
                autocomplete="off">
              <div class="input-group-append">
                <span class="input-group-text">.Kg</span>
              </div>
            </div>
          </div>
              </div>
              <div class="modal-footer justify-content-between">
                <a href="/" class="btn btn-default" data-dismiss="modal">kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this -> endsection() ?>