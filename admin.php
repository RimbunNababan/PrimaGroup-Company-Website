<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prima Group</title>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
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
    overflow-y: auto; /* Mengaktifkan scroll vertikal pada konten utama */
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
                    <a class="nav-link text-white" href="datapembelian.php">
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
            <h3><i class="fa-solid fa-gauge-high me-2"></i>DASHBOARD</h3>
            <hr />
            <div class="row">
                <!-- Konten Utama -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="admin.js"></script>
</body>
</html>
