<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
          <h5 class="card-header">Form Tambah Data Mahasiswa</h5>
          <div class="card-body">

          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
          <?php endif; ?>

            <form class="" action="" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="nrp">NPM</label>
                <input type="text" class="form-control" id="nrp" name="npm">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan">
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
              </div>
              <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

              </div>
            </form>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
