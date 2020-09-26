## Belajar CodeIgniter webprogramming UNPAS

Hal yang menjadi menarik

**1. Validasi Inputan**
<br> Walau HTML bisa memvalidasi inputan tapi mungkin lebih baiknya jika validasi juga dilakukan di dalam framework codeigniter.
- Letak file
`/application/controllers/Mahasiswa.php` dalam `class tambah` adalah hasil validasi `/application/view/mahasiswa/tambah.php`.

- Letak Syntax Validasi `$this->form_validation->set_rules('nama','Nama','required');`

- Validasi secara standar muncul pesan berbahasa Inggris, tapi sebenarnya kita bisa mengubahnya menjadi bahasa Indonesia atau bahasa yang kita inginkan.
- Pengubahan Pesan Validasi dapat dilakukan dengan cara mencopy file `system/language/english/form_validation_lang.php` ke `application/language/english/form_validation_lang.php`
- Mengubahan dapat dilakukan dengan cara melakukan edit isi file dan diganti dengan bahasa yang kita inginkan.


**2. Mengamankan dari SQL Injection**
<br> Entah web kita akan diserang hacker atau tidak setidaknya kita sudah antisipasi walaupun dengan hal yang sangat sederhana.
- Letak file `application/models/Mahasiswa_model.php` adalah file input data mahasiswa ke database.

- Letak Syntax ` "nama" => $this->input->post('nama', true)` nilai  **true** adalah sebuah fungsi untuk mengamakan dari serangan **SQL Injection**.

**3. Flash Data**
<br>Flash Data adalah sebuah pemberitahuan atau informasi jika data kita sudah tertambah, terhapus, dan teredit.

- Letak file `application/views/mahasiswa/index.php` dan di proses ketika inputkan berhasil. Proses flash dilakukan di `application/controllers/Mahasiswa.php`.

- Dibagian `$this->session->set_flashdata('flash', 'Ditambahkan');` **flash** adalah sebuah variabel yang dikirimkan ke `application/views/mahasiswa/index.php`.
- **'Ditambahkan'** adalah sebuah kata yang akan tampil di dalam flash, karena akan ada perbedaan untuk hapus.

**4. Float-right**
<br>Float-right adalah sebuah fungsi di class yang bisa kita pakai untuk memposisikan letak di sebelah kiri.
- Letak file `application/views/mahasiswa/index.php`

- Letak syntax `          <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin?');">Hapus</a>`

**5. Menambahkan style CSS di bootstrap**
<br>Walau pun tidak sering, tapi saya rasa ini sangat penting ketika kita sedang membuat sebuah project, mengingat sebuah tampilan kadang perlu edit jarak dan sebagainya jadi kita perlu menambahkan sedikit css pada bootstrap kita.
- Letak file css `assets/css/style.css`

- Di sisipan di file `application/views/template/header.php`

**6. Pencarian Data dengan CodeIgniter**
<br>Pencarian Data hal yang sangat penting apa lagi untuk sebuah program yang mempunyai data yang sangat banyak.
- Letak file `application/views/mahasiswa/index.php`

- Letak Syntax `<input type="text" name="keyword" class="form-control" placeholder="Cari Data Mahasiswa" >`.
- Yang akan dikrim ke Controller `Mahasiswa.php` di dalam syntax `  if ( $this->input->post('keyword')) {
    $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
  }`
- Lalu diproses di model `application/models/Mahasiswa_model.php` di dalam syntax `        $keyword = $this->input->post('keyword', true);`
- Syntax `$this->db->like('nama', $keyword);` berfungsi untuk mencari data yang sama dari yang dicari.
- Syntax `        $this->db->or_like('npm', $keyword);` untuk mencari data dalam kolom database berbeda.
