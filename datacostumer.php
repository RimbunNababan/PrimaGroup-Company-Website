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
            
       <!-- Formulir Pencarian -->
<div class="d-flex mt-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#customerModal">
        Add Customer
    </button>
<form class="d-flex ms-4" style="width: 800px" method="GET" action="">
            <input class="form-control me-2" type="search" name="search" placeholder="Cari rumah berdasarkan blok dan status" aria-label="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
</div>

       
            <div class="row" id="main">
            <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Customer</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
           include 'koneksi.php'; // Sambungkan ke database

           // Query untuk mengambil data customer
           $search = isset($_GET['search']) ? $_GET['search'] : '';
           $sql = "SELECT id_customer, nama, alamat, no_hp, email FROM customer WHERE nama LIKE '%$search%' OR id_customer LIKE '%$search%'";
           $result = $conn->query($sql);
           
           if ($result->num_rows > 0) {
               $no = 1;
               while ($row = $result->fetch_assoc()) {
                   echo "<tr>";
                   echo "<th scope='row'>" . $no++ . "</th>";
                   echo "<td>" . $row['id_customer'] . "</td>";
                   echo "<td>" . $row['nama'] . "</td>";
                   echo "<td>" . $row['alamat'] . "</td>";
                   echo "<td>" . $row['no_hp'] . "</td>";
                   echo "<td>" . $row['email'] . "</td>";
                   echo "<td>
                          <a href='#' class='btn btn-warning btn-sm edit-btn' data-id='" . $row['id_customer'] . "' data-nama='" . $row['nama'] . "' data-alamat='" . $row['alamat'] . "' data-no_hp='" . $row['no_hp'] . "' data-email='" . $row['email'] . "'>Edit</a>
                    <a href='#' class='btn btn-danger btn-sm delete-btn' data-id='" . $row['id_customer'] . "'>Hapus</a>
                         </td>";
                   echo "</tr>";
               }
           } else {
               echo "<tr><td colspan='7' class='text-center'>Data tidak ditemukan</td></tr>";
           }
           
           $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCustomerModalLabel">Edit Data Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCustomerForm">
                    <input type="hidden" id="editCustomerId" name="id_customer">
                    <div class="mb-3">
                        <label for="editCustomerName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="editCustomerName" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCustomerAddress" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="editCustomerAddress" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCustomerPhone" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="editCustomerPhone" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCustomerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editCustomerEmail" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Customer -->
<div class="modal fade" id="deleteCustomerModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCustomerModalLabel">Hapus Data Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus customer ini?</p>
                <form id="deleteCustomerForm">
                    <input type="hidden" id="deleteCustomerId" name="id_customer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>

        <div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customerModalLabel"> <i class="fa-regular fa-user me-2"></i>Tambah Data Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="customerForm">
                        <div class="mb-3">
                            <label for="customerId" class="form-label">ID Customer</label>
                            <input type="text" class="form-control" id="customerId" name="id_customer" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="customerName" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="customerAddress" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerPhone" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="customerPhone" name="no_hp" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="customerEmail" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
            $('#customerForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                $.ajax({
                    url: 'insert_customer.php', // PHP script to handle the insertion
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        console.log('Response from server:', response); // Debugging response
                        alert('Customer added successfully!');
                        $('#customerModal').modal('hide'); // Close the modal
                    location.reload(); // Refresh the page to remove deleted data
                        // Optionally, you can refresh the customer list here
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error:', textStatus, errorThrown); // Debugging AJAX error
                        alert('Error adding customer.');
                    }
                });
            });
        });
    </script>
    <script>
    $(document).ready(function() {
        // Edit Button Click
        $('.edit-btn').on('click', function() {
            var id = $(this).data('id');
            var nama = $(this).data('nama');
            var alamat = $(this).data('alamat');
            var no_hp = $(this).data('no_hp');
            var email = $(this).data('email');

            $('#editCustomerId').val(id);
            $('#editCustomerName').val(nama);
            $('#editCustomerAddress').val(alamat);
            $('#editCustomerPhone').val(no_hp);
            $('#editCustomerEmail').val(email);

            $('#editCustomerModal').modal('show');
        });

        // Delete Button Click
        $('.delete-btn').on('click', function() {
            var id = $(this).data('id');
            $('#deleteCustomerId').val(id);
            $('#deleteCustomerModal').modal('show');
        });

        // Handle Edit Form Submission
        $('#editCustomerForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: 'update_customer.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    console.log('Response from server:', response);
                    alert('Customer updated successfully!');
                    $('#editCustomerModal').modal('hide');
                    location.reload(); // Refresh the page to show updated data
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error:', textStatus, errorThrown);
                    alert('Error updating customer.');
                }
            });
        });

        // Handle Delete Form Submission
        $('#deleteCustomerForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: 'delete_customer.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    console.log('Response from server:', response);
                    alert('Customer deleted successfully!');
                    $('#deleteCustomerModal').modal('hide');
                    location.reload(); // Refresh the page to remove deleted data
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error:', textStatus, errorThrown);
                    alert('Error deleting customer.');
                }
            });
        });
    });
</script>

</body>
</html>
