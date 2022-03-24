<!-- Default box -->
<div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Informasi</b></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
          <!-- flashdata insert -->
    
    <?php if( session() -> getFlashdata('pesanGagalInsert') ) : ?>
        <?= $validation -> ListErrors() ?>

      <!-- flashdata update -->
    <?php elseif( session() -> getFlashdata('pesanGagalUpdate') ) : ?>
        <?= $validation -> ListErrors() ?>

    <?php endif; ?>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!-- flashdata insert -->
          <?php if( session() -> getFlashdata('pesanInsert') ) : ?>
            <div class="alert alert-info" role="alert">
            <?= session() ->getFlashdata('pesanInsert', 'Data berhasil di Tambahkan!') ?>
          </div>
    
    <?php elseif( session() -> getFlashdata('pesanGagalInsert') ) : ?>
      <div class="alert alert-danger" role="alert">
        <?= session() ->getFlashdata('pesanGagalInsert', 'Data gagal di Tambahkan!') ?>
      </div>

      <!-- flashdata update -->
    <?php elseif( session() -> getFlashdata('pesanUpdate') ) : ?>
      <div class="alert alert-info" role="alert">
        <?= session() ->getFlashdata('pesanUpdate','Data berhasil di Ubah!') ?>
      </div>

    <?php elseif( session() -> getFlashdata('pesanGagalUpdate') ) : ?>
      <div class="alert alert-danger" role="alert">
        <?= session() ->getFlashdata('pesanGagalUpdate','Data gagal di Ubah!') ?>
      </div>

      <!-- flashdata delete -->
    <?php elseif( session() -> getFlashdata('pesanDelete') ) : ?>
      <div class="alert alert-info" role="alert">
        <?= session() ->getFlashdata('pesanDelete','Data berhasil di Hapus!') ?>
      </div>

    <?php endif; ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
