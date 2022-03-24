<?= $this -> extend('template/master') ?>
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
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-outline-primary" data-toggle="modal"
                  data-target="#modal-tambah">
                  Tambah Data
                </button>
                <?= $this -> include('rendemenGiling/tambah') ?>
                <?= $this -> include('template/flashdata') ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jumlah Gabah / Kg</th>
                      <th>Jumlah Beras / Kg</th>
                      <th>Rendemen</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i= 1 ?>
                    <?php foreach( $rendemenGiling as $row ) : ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $row['JGabah'] ?></td>
                            <td><?= $row['JBeras'] ?></td>
                            <td><?= $row['rendemen'] ?></td>
                            <td>
                                <a href="/giling-edit/<?= $row['id'] ?>" class="btn btn-inline btn-outline-warning">Edit</a>
                                &nbsp;
                                <form action="/giling-delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-inline btn-outline-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach?>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Jumlah Gabah</th>
                      <th>Jumlah Beras</th>
                      <th>Rendemen</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this -> endsection('content') ?>