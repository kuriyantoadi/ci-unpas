<div class="container">

<!-- penggunaan flash data -->
<?php if ( $this->session->flashdata('flash')): ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mahasiswa<strong> Berhasil </strong><?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>

  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
      <h1>Daftar Mahasiswa</h1>
      <ul class="list-group">
        <?php foreach( $mahasiswa as $mhs ) : ?>
        <li class="list-group-item">
          <?= $mhs['nama'] ?>
          <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin?');">Hapus</a>
        </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>

</div>
