<?php
session_start();
if ($_SESSION['peran'] !== 'Staff') {
    header("Location: login.php?error=Anda tidak memiliki akses ke halaman ini.");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Perpustakaan SMA RK Serdang Murni Lubuk Pakkam</title>
        <link rel="stylesheet" href="fontawesome-free/css/all.min.css" />
        <link rel="stylesheet" href="admin.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          >Selamat Datang di Perpustakaan SMA RK Serdang Murni Lubuk Pakkam</a
        >
      </div>
    </nav>
    <div class="row no-gutters">
      <div class="col-md-2 bg-dark pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="index.php"
              ><i class="fa-solid fa-gauge-high me-2"></i> Dashboard</a
            >
            <hr class="text-white" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"
              ><i class="fa-solid fa-user me-2"></i>Data Pengguna</a
            >
            <hr class="text-white" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="buku.php"
              ><i class="fa-solid fa-book me-2"></i>Data Buku</a
            >
            <hr class="text-white" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="peminjaman.php"
              ><i class="fa-solid fa-file-alt me-2"></i> Peminjaman</a
            >
            <hr class="text-white" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"
              ><i class="fas fa-calendar-alt me-2"></i
              >Reservasi</a
            >
            <hr class="text-white" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pengembalian.php"
              ><i class="fa fa-undo"></i>
              Pengembalian</a
            >
            <hr class="text-white" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php"
              ><i class="fa-solid fa-sign-out-alt me-2"></i>Logout</a
            >
            <hr class="text-white" />
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2 mt-4 ">
        <h3><i class="fa-solid fa-user me-2"></i>Data Pengguna</h3>
        <hr />
                 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
<i class="fa-solid fa-plus me-2"></i>TAMBAH DATA PENGGUNA
</button>
<table class="table table-bordered table-striped  table-hover">
  <?php
include 'koneksi.php';

// Tentukan jumlah data per halaman
$perPage = 5;

// Dapatkan halaman saat ini dari URL, jika tidak ada, set ke 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $perPage;

// Hitung total jumlah data
$totalResult = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM pengguna");
$totalRow = mysqli_fetch_assoc($totalResult)['total'];
$totalPages = ceil($totalRow / $perPage);

// Ambil data untuk halaman saat ini
$tampil = mysqli_query($koneksi, "SELECT * FROM pengguna ORDER BY id DESC LIMIT $start, $perPage");
?>
    <thead class="text-center">
        <tr class="table-info">
            <th scope="col">No</th>
            <th scope="col">ID Pengguna</th>
            <th scope="col">Nama Pengguna</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Kata Sandi</th>
            <th scope="col">Peran</th>
            <th colspan="2" scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = $start + 1;
        while ($data = mysqli_fetch_array($tampil)) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['tanggal_lahir'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['agama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_hp'] ?></td>
            <td><?= $data['kata_sandi'] ?></td>
            <td><?= $data['peran'] ?></td>
            <td><i class="fa-solid fa-pen-to-square bg-success p-2 text-white rounded" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $data['id'] ?>" data-toggle="tooltip" title="Edit"></i></td>
            <td><i class="fa-solid fa-trash bg-danger p-2 text-white rounded" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $data['id'] ?>" data-toggle="tooltip" title="Delete"></i></td>
        </tr>
        <!-- Modal Ubah -->
        <div class="modal fade" id="modalUbah<?= $data['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUbahLabel<?= $data['id'] ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalUbahLabel<?= $data['id'] ?>"><i class="fa-solid fa-user me-2"></i>Form Ubah Data Pengguna</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="simpan_data_pengguna.php">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="idPengguna<?= $data['id'] ?>" class="form-label">ID Pengguna</label>
                                <input type="text" class="form-control" id="idPengguna<?= $data['id'] ?>" name="id" value="<?= $data['id'] ?>" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="namaPengguna<?= $data['id'] ?>" class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" id="namaPengguna<?= $data['id'] ?>" name="nama" value="<?= $data['nama'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="tanggalLahir<?= $data['id'] ?>" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggalLahir<?= $data['id'] ?>" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="jenisKelamin<?= $data['id'] ?>" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenisKelamin<?= $data['id'] ?>" name="jenis_kelamin">
                                    <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="agama<?= $data['id'] ?>" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="agama<?= $data['id'] ?>" name="agama" value="<?= $data['agama'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="alamat<?= $data['id'] ?>" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat<?= $data['id'] ?>" name="alamat" rows="3"><?= $data['alamat'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="noHP<?= $data['id'] ?>" class="form-label">No HP</label>
                                <input type="text" class="form-control" id="noHP<?= $data['id'] ?>" name="no_hp" value="<?= $data['no_hp'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="kataSandi<?= $data['id'] ?>" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="kataSandi<?= $data['id'] ?>" name="kata_sandi" value="<?= $data['kata_sandi'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="peran<?= $data['id'] ?>" class="form-label">Peran</label>
                                <select class="form-select" id="peran<?= $data['id'] ?>" name="peran">
                                    <option value="Siswa" <?= $data['peran'] == 'Siswa' ? 'selected' : '' ?>>Siswa</option>
                                    <option value="Guru" <?= $data['peran'] == 'Guru' ? 'selected' : '' ?>>Guru</option>
                                    <option value="Staff" <?= $data['peran'] == 'Staff' ? 'selected' : '' ?>>Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Hapus -->
        <div class="modal fade" id="modalHapus<?= $data['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalHapusLabel<?= $data['id'] ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalHapusLabel<?= $data['id'] ?>"><i class="fa-solid fa-circle-info me-2"></i>Konfirmasi Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="simpan_data_pengguna.php">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="modal-body">
                            <h5 class="text-center">Apakah anda yakin menghapus data ini?<br>
                            <span class="text-danger"><?= $data['id'] ?> - <?= $data['nama'] ?></span>
                            </h5>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="hapus">Ya, Hapus aja!</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endwhile ?>
    </tbody>
</table>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalTambahLabel"><i class="fa-solid fa-user me-2"></i>Form Tambah Data Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="simpan_data_pengguna.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="idPengguna" class="form-label">ID Pengguna</label>
                        <input type="text" class="form-control" id="idPengguna" name="id" />
                    </div>
                    <div class="mb-3">
                        <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" id="namaPengguna" name="nama" />
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggal_lahir" />
                    </div>
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jenisKelamin" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" />
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="noHP" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="noHP" name="no_hp" />
                    </div>
                    <div class="mb-3">
                        <label for="kataSandi" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="kataSandi" name="kata_sandi" />
                    </div>
                    <div class="mb-3">
                        <label for="peran" class="form-label">Peran</label>
                        <select class="form-select" id="peran" name="peran">
                            <option value="Siswa">Siswa</option>
                            <option value="Guru">Guru</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                </div>
            </form>
        </div>
    </div>
</div>  
<div class="d-flex justify-content-between">
    <nav>
        <ul class="pagination">
            <?php if ($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php endif; ?>
            
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
            <?php endfor; ?>
            
            <?php if ($page < $totalPages): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
</table>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin.js"></script>
  </body>
</html>
