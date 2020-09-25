## Belajar CodeIgniter webprogramming UNPAS

Hal yang menjadi menarik

**1. Validasi Inputan**
<br> Walau HTML bisa memvalidasi inputan tapi mungkin lebih baiknya jika validasi juga dilakukan di dalam framework codeigniter.
- Letak file
`/application/controllers/Mahasiswa.php` dalam `class tambah` adalah hasil validasi `/application/view/mahasiswa/tambah.php`.
- Validasi secara standar muncul pesan berbahasa Inggris, tapi sebenarnya kita bisa mengubahnya menjadi bahasa Indonesia atau bahasa yang kita inginkan.
- Pengubahan Pesan Validasi dapat dilakukan dengan cara mencopy file `system/language/english/form_validation_lang.php` ke `application/language/english/form_validation_lang.php`
- Mengubahan dapat dilakukan dengan cara melakukan edit isi file dan diganti dengan bahasa yang kita inginkan.

**2. Mengamankan dari SQL Injection**
<br> Entah web kita akan diserang hacker atau tidak setidaknya kita sudah antisipasi walaupun dengan hal yang sangat sederhana.
- Letak file `application/models/Mahasiswa_model.php` adalah file input data mahasiswa ke database.
- ` "nama" => $this->input->post('nama', true)` nilai  **true** adalah sebuah fungsi untuk mengamakan dari serangan **SQL Injection**.
