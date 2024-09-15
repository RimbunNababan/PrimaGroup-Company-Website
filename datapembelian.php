<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prima Group</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
   
 
    <style>
      body {
    margin: 0;
    overflow: hidden; /* Menghilangkan scroll dari body */
}

.navbar {
    z-index: 1000; /* Memastikan navbar horizontal berada di atas */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}
.table-container {
            max-height: 500px;
            overflow-y: auto;
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
#main{
  overflow-y: auto; /* Mengaktifkan scroll vertikal pada navbar */
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
            <h3><i class="fa-regular fa-user me-2"></i>Customer Perumahan Duta Mutiara Residence</h3>
            <hr />
            <div class="container mt-4">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Pembelian</button>
        
        <div class="table-responsive" style="max-height: 400px; overflow-x: auto; overflow-y: auto;">
    <table class="table table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th>No</th>
                <th>ID Pembelian</th>
                <th>ID Customer</th>
                <th>Blok Rumah</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Pembelian</th>
                <th>Harga Total</th>
                <th>Diskon</th>
                <th>DP</th>
                <th>Total Pembayaran</th>
                <th>Angsuran Per Bulan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php'; // Sambungkan ke database

            $sql = "SELECT * FROM pembelian";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$no}</td>";
                    echo "<td>{$row['id_pembelian']}</td>";
                    echo "<td>{$row['id_customer']}</td>";
                    echo "<td>{$row['blok_rumah']}</td>";
                    echo "<td>{$row['metode_pembayaran']}</td>";
                    echo "<td>{$row['tanggal_pembelian']}</td>";
                    echo "<td>" . number_format($row['harga_total'], 2, ',', '.') . "</td>";
                    echo "<td>" . number_format($row['diskon'], 2, ',', '.') . "</td>";
                    echo "<td>" . number_format($row['dp'], 2, ',', '.') . "</td>";
                    echo "<td>" . number_format($row['total_pembayaran'], 2, ',', '.') . "</td>";
                    echo "<td>" . number_format($row['angsuran_per_bulan'], 2, ',', '.') . "</td>";
                    echo "<td>
                            <button class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' data-id='{$row['id_pembelian']}' data-id-customer='{$row['id_customer']}' data-blok-rumah='{$row['blok_rumah']}' data-metode-pembayaran='{$row['metode_pembayaran']}' data-tanggal-pembelian='{$row['tanggal_pembelian']}' data-harga-total='{$row['harga_total']}' data-diskon='{$row['diskon']}' data-dp='{$row['dp']}' data-total-pembayaran='{$row['total_pembayaran']}' data-angsuran-per-bulan='{$row['angsuran_per_bulan']}'>Edit</button>
                            <a href='hapus_pembelian.php?id={$row['id_pembelian']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='12' class='text-center'>Data tidak ditemukan</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

    </div>
    
    <!-- Modal Add Pembelian -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Pembelian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addPembelianForm">
                        <div class="mb-3">
                            <label for="addIdPembelian" class="form-label">ID Pembelian</label>
                            <input type="text" class="form-control" id="addIdPembelian" name="id_pembelian" required>
                        </div>
                        <div class="mb-3">
    <label for="searchCustomer" class="form-label">Cari Customer</label>
    <input type="text" id="searchCustomer" class="form-control" placeholder="Cari ID atau Nama Customer" required>
    <input type="hidden" id="addIdCustomer" name="id_customer">
</div>
<script>
    $(function() {
        $("#searchCustomer").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "search_customer.php",
                    type: "GET",
                    data: {
                        term: request.term
                    },
                    dataType: "json",
                    success: function(data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            select: function(event, ui) {
                $("#searchCustomer").val(ui.item.label);
                $("#addIdCustomer").val(ui.item.value);
                return false;
            }
        });
    });
</script>
                      <div class="mb-3">
                        <label for="addIdCustomer" class="form-label">Blok Rumah</label>
                        <select class="form-select" id="addIdCustomer" name="id_customer" required>
                            <option value="" selected disabled>Pilih Blok Rumah</option>
                            <?php
                            include 'koneksi.php';
                            $sql = "SELECT blok_rumah, harga_jual FROM rumah"; // Ganti dengan nama tabel Anda
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='{$row['id']}'>{$row['blok_rumah']} - {$row['harga_jual']}</option>";
                                }
                            } else {
                                echo "<option value='' disabled>Tidak ada data</option>";
                            }
                            ?>
                        </select>
                    </div>
                       
                        <div class="mb-3">
                            <label for="addMetodePembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="addMetodePembayaran" name="metode_pembayaran" required>
                                <option value="cash">Cash</option>
                                <option value="credit">Credit</option>
                                <option value="kpr">KPR</option>
                                <option value="kpr">Booking</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="addTanggalPembelian" class="form-label">Tanggal Pembelian</label>
                            <input type="date" class="form-control" id="addTanggalPembelian" name="tanggal_pembelian" required>
                        </div>
                        <div class="mb-3">
                            <label for="addHargaTotal" class="form-label">Harga Total</label>
                            <input type="number" class="form-control" id="addHargaTotal" name="harga_total" required>
                        </div>
                        <div class="mb-3">
                            <label for="addDiskon" class="form-label">Diskon</label>
                            <input type="number" class="form-control" id="addDiskon" name="diskon" required>
                        </div>
                        <div class="mb-3">
                            <label for="addDp" class="form-label">Down Payment (DP)</label>
                            <input type="number" class="form-control" id="addDp" name="dp" required>
                        </div>
                        <div class="mb-3">
                            <label for="addTotalPembayaran" class="form-label">Total Pembayaran</label>
                            <input type="number" class="form-control" id="addTotalPembayaran" name="total_pembayaran" required>
                        </div>
                        <div class="mb-3">
                            <label for="addAngsuranPerBulan" class="form-label">Angsuran Per Bulan</label>
                            <input type="number" class="form-control" id="addAngsuranPerBulan" name="angsuran_per_bulan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Pembelian -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Pembelian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editPembelianForm">
                        <input type="hidden" id="editIdPembelian" name="id_pembelian">
                        <div class="mb-3">
                            <label for="editIdCustomer" class="form-label">ID Customer</label>
                            <input type="text" class="form-control" id="editIdCustomer" name="id_customer" required>
                        </div>
                        <div class="mb-3">
                            <label for="editBlokRumah" class="form-label">Blok Rumah</label>
                            <input type="text" class="form-control" id="editBlokRumah" name="blok_rumah" required>
                        </div>
                        <div class="mb-3">
                            <label for="editMetodePembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="editMetodePembayaran" name="metode_pembayaran" required>
                                <option value="cash">Cash</option>
                                <option value="credit">Credit</option>
                                <option value="kpr">KPR</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editTanggalPembelian" class="form-label">Tanggal Pembelian</label>
                            <input type="date" class="form-control" id="editTanggalPembelian" name="tanggal_pembelian" required>
                        </div>
                        <div class="mb-3">
                            <label for="editHargaTotal" class="form-label">Harga Total</label>
                            <input type="number" class="form-control" id="editHargaTotal" name="harga_total" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDiskon" class="form-label">Diskon</label>
                            <input type="number" class="form-control" id="editDiskon" name="diskon" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDp" class="form-label">Down Payment (DP)</label>
                            <input type="number" class="form-control" id="editDp" name="dp" required>
                        </div>
                        <div class="mb-3">
                            <label for="editTotalPembayaran" class="form-label">Total Pembayaran</label>
                            <input type="number" class="form-control" id="editTotalPembayaran" name="total_pembayaran" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAngsuranPerBulan" class="form-label">Angsuran Per Bulan</label>
                            <input type="number" class="form-control" id="editAngsuranPerBulan" name="angsuran_per_bulan" required>
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
       <!-- jQuery and Bootstrap JavaScript -->
       
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="admin.js"></script>
    <script>
$(document).ready(function() {
    $("#addIdCustomer").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "search_customer.php",
                type: "GET",
                dataType: "json",
                data: {
                    term: request.term
                },
                success: function(data) {
                    response($.map(data, function(item) {
                        return {
                            label: item.id_customer + " - " + item.nama,
                            value: item.id_customer
                        };
                    }));
                }
            });
        },
        minLength: 2,
        select: function(event, ui) {
            $("#addIdCustomer").val(ui.item.value);
            return false;
        }
    });
});
</script>

</body>
</html>
