<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prima Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
   
 
    <style>
      body {
    margin: 0;
    overflow: hidden; /* Menghilangkan scroll dari body */
}
.table-container {
            max-height: 500px;
            overflow-y: auto;
        }
.navbar {
    z-index: 1000; /* Memastikan navbar horizontal berada di atas */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}


#navbar-vertical {
    height: 100vh; /* Membuat navbar memenuhi tinggi layar */
    overflow-y: auto; /* Mengaktifkan scroll vertikal pada navbar */
    position: fixed; /* Menjadikan navbar tetap pada posisinya */
    top: 56px; /* Sesuaikan dengan tinggi navbar horizontal */
    left: 0;
    width: 20.66667%; /* Sesuai dengan col-md-2 */
    padding: 0; /* Menghilangkan padding pada navbar vertikal */
}

#main-content {
  margin-left: 20.66667%; /* Menyesuaikan margin kiri sesuai lebar navbar vertikal */
    margin-top: 80px; /* Menambahkan margin atas untuk menurunkan konten utama */
    padding: 1rem; /* Padding di sekitar konten utama */
    height: calc(100vh - 80px); /* Menyesuaikan tinggi konten utama dengan mengurangi margin atas */
    
}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Admin Prima Group</a>
        </div>
    </nav>
    <div class="row no-gutters">
        <div class="col-md-2 bg-dark pr-3 pt-4" id="navbar-vertical">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="admin.php">
                        <i class="fa-solid fa-gauge-high  me-2"></i> Dashboard
                    </a>
                    <hr class="text-white" />
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-house me-2"></i> Siteplan Rumah
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Perumahan Citra Mutiara</a></li>
                        <li><a class="dropdown-item" href="#">Perumahan Griya Bintang Mutiara 2</a></li>
                        <li><a class="dropdown-item" href="#">Perumahan Mutiara Regency</a></li>
                        <li><a class="dropdown-item" href="siteplandmr.php">Perumahan Duta Mutiara Residence</a></li>
                    </ul>
                </li>
                <hr class="text-white" />
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-house-user me-2"></i> Data Rumah
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Perumahan Citra Mutiara</a></li>
                        <li><a class="dropdown-item" href="#">Perumahan Griya Bintang Mutiara 2</a></li>
                        <li><a class="dropdown-item" href="#">Perumahan Mutiara Regency</a></li>
                        <li><a class="dropdown-item" href="datarumahdmr.php">Perumahan Duta Mutiara Residence</a></li>
                    </ul>
                </li>
                <hr class="text-white" />
                <li class="nav-item">
                    <a class="nav-link text-white" href="datacostumer.php">
                        <i class="fa-regular fa-user me-2"></i> Data Customer
                    </a>
                    <hr class="text-white" />
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">
                        <i class="fa-solid fa-file-invoice me-2"></i> Transaksi Pembeli
                    </a>
                    <hr class="text-white" />
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">
                        <i class="fa-solid fa-sign-out-alt me-2"></i> History Transaksi
                    </a>
                    <hr class="text-white" />
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">
                        <i class="fa-solid fa-sign-out-alt me-2"></i> Logout
                    </a>
                    <hr class="text-white" />
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2 " id="main-content">
            <h3><i class="fa-solid fa-house me-2"></i>Siteplan Perumahan Duta Mutiara Residence</h3>
            <hr />
           <!-- Formulir Pencarian -->
           <form class="d-flex mb-3" style="width: 900px; margin: auto" method="GET" action="">
            <input class="form-control me-2" type="search" name="search" placeholder="Cari rumah berdasarkan blok dan status" aria-label="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="row" id="main">
            <div class="container mt-2">
                <div class="table-container">
                    <table class="table table-bordered ">
                        <thead class="table-info text-center">
                            <tr>
                                <th scope="col">Blok Rumah</th>
                                <th scope="col">Harga Jual</th>
                                <th scope="col">Status</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="data-table-body">
                        <?php
                        include 'koneksi.php'; // Sambungkan ke database

                        // Ambil nilai pencarian
                        $search = isset($_GET['search']) ? $_GET['search'] : '';

                        // Query untuk mengambil data dari tabel rumah
                        $sql = "SELECT blok_rumah, harga_jual, status, keterangan FROM rumah WHERE blok_rumah LIKE '%$search%' OR status LIKE '%$search%'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $harga_jual = number_format($row['harga_jual'], 0, ',', '.');
                                $status = $row['status'];

                                // Tampilkan tombol jika status adalah 'booking' atau kosong, sembunyikan jika status adalah 'cash' atau 'credit'
                                $showEditButton = ($status === 'Booking' || $status === 'Kosong') ? '' : 'd-none'; 

                                echo "<tr>
                                        <td>{$row['blok_rumah']}</td>
                                        <td>Rp {$harga_jual}</td>
                                        <td>{$row['status']}</td>
                                        <td>{$row['keterangan']}</td>
                                        <td>
                                            <button class='btn btn-success  btn-sm $showEditButton' style='width: 100px;' data-bs-toggle='modal' data-bs-target='#editModal' data-id='{$row['blok_rumah']}' data-harga-jual='{$row['harga_jual']}' data-status='{$row['status']}' data-keterangan='{$row['keterangan']}'>
                                                Edit
                                            </button>
                                        </td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Data tidak ditemukan</td></tr>";
                        }

                        $conn->close();
                        ?>
                        </tbody>
                    </table>

                    <!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Rumah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="update_rumah.php" method="POST">
                    <input type="hidden" id="editBlokRumah" name="blok_rumah">
                    <div class="mb-3">
                        <label for="editHargaJual" class="form-label">Harga Jual</label>
                        <input type="text" class="form-control" id="editHargaJual" name="harga_jual" required>
                    </div>
                    <div class="mb-3">
        <label for="editStatus" class="form-label">Status</label>
        <select class="form-select" id="editStatus" name="status" required>
    <option value="cash">Cash</option>
    <option value="kredit">Kredit</option>
    <option value="booking">Booking</option>
</select>

    </div>

                    <div class="mb-3">
                        <label for="editKeterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="editKeterangan" name="keterangan" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
 $('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button yang memicu modal
    var id = button.data('id');
    var hargaJual = button.data('harga-jual');
    var status = button.data('status');
    var keterangan = button.data('keterangan');

    var modal = $(this);
    modal.find('#editBlokRumah').val(id);

    // Format harga jual ke Rupiah
    var formattedHargaJual = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(hargaJual);
    modal.find('#editHargaJual').val(formattedHargaJual);

    // Set status
    modal.find('#editStatus').val(status);

    modal.find('#editKeterangan').val(keterangan);
});

</script>

</body>
</html>
