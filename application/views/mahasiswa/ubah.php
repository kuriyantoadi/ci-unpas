<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
          <h5 class="card-header">Form Ubah Data Mahasiswa</h5>
          <div class="card-body">

          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
          <?php endif; ?>

            <form class="" action="" method="post">

              <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $mahasiswa['nama'] ?>">
                <small class="form-text text-danger"><?= form_error('nama') ?></small>
              </div>
              <div class="form-group">
                <label for="nrp">NPM</label>
                <input type="text" class="form-control" id="nrp" name="npm" value="<?= $mahasiswa['npm'] ?>">
                <small class="form-text text-danger"><?= form_error('npm') ?></small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
                <small class="form-text text-danger"><?= form_error('email') ?></small>
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan">
                  <?php foreach( $jurusan as $j ) : ?>
                  <?php if( $j == $mahasiswa['jurusan']) : ?>
                    <option value="<?= $j; ?>" selected> <?= $j; ?></option>
                  <?php else : ?>
                    <option value="<?= $j; ?>"> <?= $j; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
                </select>
              </div>
              <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

              </div>
            </form>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
