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

.house {
            cursor: pointer; /* Menunjukkan bahwa elemen ini bisa diklik */
        }
    .container {
        margin-top: -200px;
        justify-content: center;
        height: 100vh;
        position: relative;
        margin-left: 2px;
      }
      .svg-container {
        margin-top: 242px;
        margin-left: 6px;
        position: relative;
        z-index: 10;
      }
      .svg-container text {
        pointer-events: none;
      }
      .lines-container {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
      }
      .vertical-line,
      .diagonal-line,
      .horizontal-line {
        position: absolute;
        z-index: 1;
      }

      .vertical-line {
        top: 225px;
        left: 10px;
      }
      rect.blok {
        z-index: 10;
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
                        <li><a class="dropdown-item" href="">Perumahan Mutiara Regency</a></li>
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
            <div class="row" id="main">
<div class="container">
      <div class="lines-container">
        <!-- Garis Vertikal -->
        <svg width="2" height="250" class="vertical-line">
          <line x1="0" y1="0" x2="0" y2="155" stroke="black" stroke-width="4" />
        </svg>
        <svg
          width="2"
          height="300"
          class="vertical-line"
          style="top: 348px; left: 667px"
        >
          <line x1="0" y1="0" x2="0" y2="125" stroke="black" stroke-width="4" />
        </svg>
        <!-- Garis Horizontal -->
        <svg
          width="800"
          height="100"
          class="horizontal-line"
          style="top: 185px; left: 60px"
        >
          <line
            x1="0"
            y1="50"
            x2="551"
            y2="50"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="300"
          class="horizontal-line"
          style="top: 160px; left: 10px"
        >
          <line
            x1="0"
            y1="220"
            x2="490"
            y2="220"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="100"
          class="horizontal-line"
          style="top: 232px; left: 10px"
        >
          <line
            x1="0"
            y1="55"
            x2="435"
            y2="55"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="250"
          class="horizontal-line"
          style="top: 267px; left: 10px"
        >
          <line
            x1="0"
            y1="55"
            x2="445"
            y2="55"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="100"
          class="horizontal-line"
          style="top: 232px; left: 475px"
        >
          <line
            x1="0"
            y1="55"
            x2="519"
            y2="55"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="250"
          class="horizontal-line"
          style="top: 267px; left: 485px"
        >
          <line
            x1="0"
            y1="55"
            x2="175"
            y2="55"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="250"
          class="horizontal-line"
          style="top: 293px; left: 593px"
        >
          <line
            x1="0"
            y1="55"
            x2="75"
            y2="55"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="1400"
          height="100"
          class="horizontal-line"
          style="top: 184px; left: 60px"
        >
          <line
            x1="575"
            y1="50"
            x2="929"
            y2="50"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="1400"
          height="100"
          class="horizontal-line"
          style="top: 513px; left: 60px"
        >
          <line
            x1="632"
            y1="50"
            x2="955"
            y2="65"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="250"
          class="horizontal-line"
          style="top: 286px; left: 588px"
        >
          <line x1="0" y1="55" x2="68" y2="55" stroke="blue" stroke-width="2" />
        </svg>
        <svg
          width="800"
          height="250"
          class="horizontal-line"
          style="top: 278px; left: 580px"
        >
          <line x1="0" y1="55" x2="64" y2="55" stroke="blue" stroke-width="2" />
        </svg>
        <svg
          width="800"
          height="250"
          class="horizontal-line"
          style="top: 236px; left: 626px"
        >
          <line
            x1="0"
            y1="55"
            x2="26"
            y2="55"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="800"
          height="250"
          class="horizontal-line"
          style="top: 263px; left: 634px"
        >
          <line
            x1="0"
            y1="55"
            x2="26"
            y2="55"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 185px; left: 10px"
        >
          <line
            x1="0"
            y1="40"
            x2="50"
            y2="50"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 185px; left: 430px"
        >
          <line
            x1="0"
            y1="50"
            x2="40"
            y2="195"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 185px; left: 460px"
        >
          <line
            x1="0"
            y1="50"
            x2="40"
            y2="195"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 184px; left: 610px"
        >
          <line
            x1="0"
            y1="50"
            x2="25"
            y2="138"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 183px; left: 635px"
        >
          <line
            x1="0"
            y1="50"
            x2="33"
            y2="165"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 422px; left: 618px"
        >
          <line
            x1="10"
            y1="47"
            x2="50"
            y2="50"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="100"
          height="300"
          class="diagonal-line"
          style="top: 337px; left: 583px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line
            x1="10"
            y1="10"
            x2="0"
            y2="215"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="100"
          height="300"
          class="diagonal-line"
          style="top: 459px; left: 614px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line
            x1="15"
            y1="10"
            x2="7"
            y2="95"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="100"
          height="300"
          class="diagonal-line"
          style="top: 312px; left: 563px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line
            x1="10"
            y1="10"
            x2="0"
            y2="239"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 329px; left: 470px"
        >
          <line x1="0" y1="50" x2="48" y2="227" stroke="red" stroke-width="1" />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 329px; left: 480px"
        >
          <line
            x1="0"
            y1="50"
            x2="48"
            y2="227"
            stroke="black"
            stroke-width="1"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 500px; left: 527px"
        >
          <line
            x1="0"
            y1="55"
            x2="37"
            y2="50"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 495px; left: 583px"
        >
          <line
            x1="0"
            y1="55"
            x2="110"
            y2="68"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="400"
          class="diagonal-line"
          style="top: 183px; left: 989px"
        >
          <line
            x1="0"
            y1="50"
            x2="25"
            y2="394"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 270px; left: 685px"
        >
          <line
            x1="0"
            y1="50"
            x2="5"
            y2="198"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 265px; left: 685px"
        >
          <line
            x1="0"
            y1="57"
            x2="280"
            y2="62"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="100"
          height="300"
          class="diagonal-line"
          style="top: 317px; left: 953px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line
            x1="11"
            y1="10"
            x2="9"
            y2="156"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 410px; left: 690px"
        >
          <line
            x1="0"
            y1="57"
            x2="272"
            y2="62"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="100"
          height="300"
          class="diagonal-line"
          style="top: 278px; left: 977px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line
            x1="11"
            y1="10"
            x2="9"
            y2="195"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 414px; left: 985px"
        >
          <line
            x1="0"
            y1="60"
            x2="12"
            y2="61"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 425px; left: 995px"
        >
          <line
            x1="0"
            y1="50"
            x2="5"
            y2="153"
            stroke="black"
            stroke-width="2"
          />
        </svg>
        <svg
          width="100"
          height="300"
          class="diagonal-line"
          style="top: 322px; left: 570px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line
            x1="10"
            y1="10"
            x2="0"
            y2="242"
            stroke="blue"
            stroke-width="2"
          />
        </svg>
        <svg
          width="100"
          height="300"
          class="diagonal-line"
          style="top: 330px; left: 577px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line
            x1="10"
            y1="10"
            x2="0"
            y2="228"
            stroke="blue"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 502px; left: 577px"
        >
          <line
            x1="0"
            y1="55"
            x2="112"
            y2="68"
            stroke="blue"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="250"
          class="diagonal-line"
          style="top: 510px; left: 571px"
        >
          <line
            x1="0"
            y1="55"
            x2="110"
            y2="68"
            stroke="blue"
            stroke-width="2"
          />
        </svg>
        <svg
          width="4"
          height="300"
          class="diagonal-line"
          style="top: 570px; left: 688px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line x1="0" y1="0" x2="0" y2="50" stroke="blue" stroke-width="3" />
        </svg>
        <svg
          width="4"
          height="300"
          class="diagonal-line"
          style="top: 578px; left: 680px"
        >
          <!-- Membuat garis vertikal dari kiri atas (10, 10) ke kiri bawah (10, 290) -->
          <line x1="0" y1="0" x2="0" y2="42" stroke="blue" stroke-width="3" />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 273px; left: 650px"
        >
          <line x1="0" y1="50" x2="5" y2="69" stroke="blue" stroke-width="2" />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 273px; left: 642px"
        >
          <line x1="0" y1="50" x2="3" y2="61" stroke="blue" stroke-width="2" />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 130px; left: 616px"
        >
          <line
            x1="0"
            y1="70"
            x2="25"
            y2="155"
            stroke="blue"
            stroke-width="2"
          />
        </svg>
        <!-- Garis Diagonal ke Kiri -->
        <svg
          width="300"
          height="300"
          class="diagonal-line"
          style="top: 130px; left: 608px"
        >
          <line
            x1="0"
            y1="70"
            x2="25"
            y2="155"
            stroke="blue"
            stroke-width="2"
          />
        </svg>
      </div>

      <div class="svg-container">
        <svg width="1000" height="350">
          <!--BLOK ATAS-->
          <!-- Blok Rumah Kosong -->
          <rect
            id="house-A-83"
            class="house"
            data-blok="A-83"
            data-status="Kosong"
            data-kredit="Belum Lunas"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="15"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-83
          </text>
          <!-- Blok Rumah Terisi -->
          <rect
          
        id="house-A-85"
            class="house"
            data-blok="A-85"
            data-status="Kosong"
            data-kredit="Lunas"
            x="30"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="45"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-85
          </text>
          <!-- Blok Rumah Sudah Cash -->
          <rect
           id="house-A-87"
            class="house"
            data-blok="A-87"
            data-status="Kosong"
            data-kredit="Lunas"
            x="60"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="75"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-87
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-89"
            class="house"
            data-blok="A-89"
            data-status="Kosong"
            data-kredit="Lunas"
            x="90"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="105"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-89
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-91"
            class="house"
            data-blok="A-91"
            data-status="Kosong"
            data-kredit="Lunas"
            x="120"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="135"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-91
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-93"
            class="house"
            data-blok="A-93"
            data-status="Kosong"
            data-kredit="Lunas"
            x="150"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="165"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-93
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-95"
            class="house"
            data-blok="A-95"
            data-status="Kosong"
            data-kredit="Lunas"
            x="180"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="195"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-95
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-97"
            class="house"
            data-blok="A-97"
            data-status="Kosong"
            data-kredit="Lunas"
            x="255"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="270"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-97
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-99"
            class="house"
            data-blok="A-99"
            data-status="Kosong"
            data-kredit="Lunas"
            x="285"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="300"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-99
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-101"
            class="house"
            data-blok="A-101"
            data-status="Kosong"
            data-kredit="Lunas"
            x="315"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="330"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-101
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-103"
            class="house"
            data-blok="A-103"
            data-status="Kosong"
            data-kredit="Lunas"
            x="345"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="360"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-103
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-105"
            class="house"
            data-blok="A-105"
            data-status="Kosong"
            data-kredit="Lunas"
            x="375"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="390"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-105
          </text>
          <!-------Kotak------>
          <rect
          id="house-A-107"
            class="house"
            data-blok="A-107"
            data-status="Kosong"
            data-kredit="Lunas"
            x="460"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="475"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-107
          </text>
          <!-------Kotak------>
          <rect
          id="house-A-109"
            class="house"
            data-blok="A-109"
            data-status="Kosong"
            data-kredit="Lunas"
            x="490"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="505"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-109
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-01"
            class="house"
            data-blok="B-01"
            data-status="Kosong"
            data-kredit="Lunas"
            x="640"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="655"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-01
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-03"
            class="house"
            data-blok="B-03"
            data-status="Kosong"
            data-kredit="Lunas"
            x="670"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="685"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-03
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-05"
            class="house"
            data-blok="B-05"
            data-status="Kosong"
            data-kredit="Lunas"
            x="700"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="715"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-05
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-07"
            class="house"
            data-blok="B-07"
            data-status="Kosong"
            data-kredit="Lunas"
            x="730"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="745"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-07
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-9"
            class="house"
            data-blok="B-09"
            data-status="Kosong"
            data-kredit="Lunas"
            x="760"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="775"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-09
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-11"
            class="house"
            data-blok="B-11"
            data-status="Kosong"
            data-kredit="Lunas"
            x="790"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="805"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-11
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-12A"
            class="house"
            data-blok="B-12A"
            data-status="Kosong"
            data-kredit="Lunas"
            x="820"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="835"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-12A
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-15"
            class="house"
            data-blok="B-15"
            data-status="Kosong"
            data-kredit="Lunas"
            x="850"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="865"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-15
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-17"
            class="house"
            data-blok="B-17"
            data-status="Kosong"
            data-kredit="Lunas"
            x="880"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="895"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-17
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-19"
            class="house"
            data-blok="B-19"
            data-status="Kosong"
            data-kredit="Lunas"
            x="910"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="925"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-19
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-21"
            class="house"
            data-blok="B-21"
            data-status="Kosong"
            data-kredit="Lunas"
            x="940"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="955"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            B-21
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-02"
            class="house"
            data-blok="B-02"
            data-status="Kosong"
            data-kredit="Lunas"
            x="665"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="690"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-02
          </text>
          <!-------Kotak------>
          <rect
            id="house-B-04"
            class="house"
            data-blok="B-04"
            data-status="Kosong"
            data-kredit="Lunas"
            x="695"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="720"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-04
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-06"
            class="house"
            data-blok="B-06"
            data-status="Kosong"
            data-kredit="Lunas"
            x="725"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="750"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-06
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-08"
            class="house"
            data-blok="B-08"
            data-status="Kosong"
            data-kredit="Lunas"
            x="755"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="780"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-08
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-10"
            class="house"
            data-blok="B-10"
            data-status="Kosong"
            data-kredit="Lunas"
            x="785"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="810"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-10
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-12"
            class="house"
            data-blok="B-12"
            data-status="Kosong"
            data-kredit="Lunas"
            x="815"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="840"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-12
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-14"
            class="house"
            data-blok="B-14"
            data-status="Kosong"
            data-kredit="Lunas"
            x="845"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="870"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-14
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-16"
            class="house"
            data-blok="B-16"
            data-status="Kosong"
            data-kredit="Lunas"
            x="875"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="900"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-16
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-18"
            class="house"
            data-blok="B-18"
            data-status="Kosong"
            data-kredit="Lunas"
            x="905"
            y="80"
            width="30"
            height="75"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="930"
            y="122.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-18
          </text>
          <!--BLOK BAWAH-->
          <!-------Kotak----->
          <rect
          id="house-A-82"
            class="house"
            data-blok="A-82"
            data-status="Kosong"
            data-kredit="Lunas"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="15"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-82
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-84"
            class="house"
            data-blok="A-84"
            data-status="Kosong"
            data-kredit="Lunas"
            x="30"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="45"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-84
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-86"
            class="house"
            data-blok="A-86"
            data-status="Kosong"
            data-kredit="Lunas"
            x="60"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="75"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-86
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-88"
            class="house"
            data-blok="A-88"
            data-status="Kosong"
            data-kredit="Lunas"
            x="90"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="105"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-88
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-90"
            class="house"
            data-blok="A-90"
            data-status="Kosong"
            data-kredit="Lunas"
            x="120"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="135"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-90
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-92"
            class="house"
            data-blok="A-92"
            data-status="Kosong"
            data-kredit="Lunas"
            x="150"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="165"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-92
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-94"
            class="house"
            data-blok="A-94"
            data-status="Kosong"
            data-kredit="Lunas"
            x="180"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="195"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-94
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-96"
            class="house"
            data-blok="A-96"
            data-status="Kosong"
            data-kredit="Lunas"
            x="255"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="270"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-96
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-98"
            class="house"
            data-blok="A-98"
            data-status="Kosong"
            data-kredit="Lunas"
            x="285"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="300"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-98
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-100"
            class="house"
            data-blok="A-100"
            data-status="Kosong"
            data-kredit="Lunas"
            x="315"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="330"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-100
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-102"
            class="house"
            data-blok="A-102"
            data-status="Kosong"
            data-kredit="Lunas"
            x="345"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="360"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-102
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-104"
            class="house"
            data-blok="A-104"
            data-status="Kosong"
            data-kredit="Lunas"
            x="375"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="390"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-104
          </text>
          <!-------Kotak----->
          <rect
           id="house-A-106"
            class="house"
            data-blok="A-106"
            data-status="Kosong"
            data-kredit="Lunas"
            x="405"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="420"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-106
          </text>
          <!-------Kotak------>
          <rect
           id="house-A-108"
            class="house"
            data-blok="A-108"
            data-status="Kosong"
            data-kredit="Lunas"
            class="house"
            data-blok="A-108"
            data-status="Kosong"
            data-kredit="Lunas"
            x="490"
            y="80"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="505"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
          >
            A-108
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-20"
            class="house"
            data-blok="B-20"
            data-status="Kosong"
            data-kredit="Lunas"
            x="608"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="623"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-20
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-22"
            class="house"
            data-blok="B-22"
            data-status="Kosong"
            data-kredit="Lunas"
            x="638"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="653"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-22
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-24"
            class="house"
            data-blok="B-24"
            data-status="Kosong"
            data-kredit="Lunas"
            x="668"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="683"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-24
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-25"
            class="house"
            data-blok="B-26"
            data-status="Kosong"
            data-kredit="Lunas"
            x="698"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="713"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-26
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-28"
            class="house"
            data-blok="B-28"
            data-status="Kosong"
            data-kredit="Lunas"
            x="728"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="743"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-28
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-30"
            class="house"
            data-blok="B-30"
            data-status="Kosong"
            data-kredit="Lunas"
            x="758"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="773"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-30
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-32"
            class="house"
            data-blok="B-32"
            data-status="Kosong"
            data-kredit="Lunas"
            x="788"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="803"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-32
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-34"
            class="house"
            data-blok="B-34"
            data-status="Kosong"
            data-kredit="Lunas"
            x="818"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="833"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-34
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-36"
            class="house"
            data-blok="B-36"
            data-status="Kosong"
            data-kredit="Lunas"
            x="848"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="863"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-36
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-38"
            class="house"
            data-blok="B-38"
            data-status="Kosong"
            data-kredit="Lunas"
            x="878"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="893"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-38
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-40"
            class="house"
            data-blok="B-40"
            data-status="Kosong"
            data-kredit="Lunas"
            x="908"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="923"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-40
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-41"
            class="house"
            data-blok="B-41"
            data-status="Kosong"
            data-kredit="Lunas"
            x="938"
            y="265"
            width="30"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(3, 655, 260)"
          ></rect>
          <text
            x="953"
            y="287.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(3, 655, 262.5)"
          >
            B-41
          </text>
          <!-------Kotak------>
          <rect
           id="house-B-23"
            class="house"
            data-blok="B-23"
            data-status="Kosong"
            data-kredit="Lunas"
            x="665"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="690"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-23
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-25"
            class="house"
            data-blok="B-25"
            data-status="Kosong"
            data-kredit="Lunas"
            x="695"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="720"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-25
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-27"
            class="house"
            data-blok="B-27"
            data-status="Kosong"
            data-kredit="Lunas"
            x="725"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="750"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-27
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-29"
            class="house"
            data-blok="B-29"
            data-status="Kosong"
            data-kredit="Lunas"
            x="755"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="780"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-29
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-31"
            class="house"
            data-blok="B-31"
            data-status="Kosong"
            data-kredit="Lunas"
            x="785"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="810"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-31
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-33"
            class="house"
            data-blok="B-33"
            data-status="Kosong"
            data-kredit="Lunas"
            x="815"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="840"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-33
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-35"
            class="house"
            data-blok="B-35"
            data-status="Kosong"
            data-kredit="Lunas"
            x="845"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="870"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-35
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-37"
            class="house"
            data-blok="B-37"
            data-status="Kosong"
            data-kredit="Lunas"
            x="875"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="900"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-37
          </text>
          <!-------Kotak------>
          <rect
          id="house-B-39"
            class="house"
            data-blok="B-39"
            data-status="Kosong"
            data-kredit="Lunas"
            x="905"
            y="155"
            width="30"
            height="70"
            fill="white"
            stroke="black"
            stroke-width="1.5"
            transform="rotate(1, 660, 695)"
          ></rect>
          <text
            x="930"
            y="197.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            transform="rotate(1, 660, 102.5)"
          >
            B-39
          </text>

          <!-- Tulisan ROW 5 m di bawah kotak -->
          <text
            x="135"
            y="65"
            font-size="12"
            text-anchor="middle"
            fill="black"
            style="font-weight: bold"
          >
            ROW 5 m
          </text>
          <text
            x="315"
            y="65"
            font-size="12"
            text-anchor="middle"
            fill="black"
            style="font-weight: bold"
          >
            ROW 5 m
          </text>
          <text
            x="570"
            y="65"
            font-size="12"
            text-anchor="middle"
            fill="black"
            style="font-weight: bold"
          >
            ROW 5 m
          </text>
          <text
            x="700"
            y="65"
            font-size="12"
            text-anchor="middle"
            fill="black"
            style="font-weight: bold"
          >
            ROW 6 m
          </text>
          <text
            x="900"
            y="65"
            font-size="12"
            text-anchor="middle"
            fill="black"
            style="font-weight: bold"
          >
            ROW 6 m
          </text>
          <text
            x="658.5"
            y="148.5"
            font-size="10"
            text-anchor="middle"
            alignm6ent-baseline="middle"
            fill="black"
            style="writing-mode: vertical-lr; font-weight: bold"
          >
            Row 6m
          </text>
          <text
            x="957.5"
            y="148.5"
            font-size="10"
            text-anchor="middle"
            alignm6ent-baseline="middle"
            fill="black"
            style="writing-mode: vertical-lr; font-weight: bold"
          >
            Row 5m
          </text>
          <text
            x="700"
            y="250"
            font-size="12"
            text-anchor="middle"
            fill="black"
            style="font-weight: bold"
            transform="rotate(2, 700, 250)"
          >
            ROW 6.5 m
          </text>
          <text
            x="900"
            y="255"
            font-size="12"
            text-anchor="middle"
            fill="black"
            style="font-weight: bold"
            transform="rotate(2, 900, 250)"
          >
            ROW 6.5 m
          </text>

          <!-- KOTAK FASUM dengan tulisan vertikal -->
          <rect
            x="210"
            y="0"
            width="45"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="232.5"
            y="22.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            style="writing-mode: vertical-lr; font-weight: bold"
          >
            FASUM
          </text>
          <!-- KOTAK FASUM dengan tulisan vertikal -->
          <rect
            x="210"
            y="80"
            width="45"
            height="45"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="232.5"
            y="102.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            style="writing-mode: vertical-lr; font-weight: bold"
          >
            FASUM
          </text>
          <text
            x="445"
            y="57.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            style="font-weight: bold"
            transform="rotate(74, 445, 57.5)"
          >
            JALAN DESA
          </text>
          <text
            x="470"
            y="190.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            style="font-weight: bold"
            transform="rotate(74, 470, 190.5)"
          >
            Jalan Desa
          </text>
          <!-- KOTAK Mushola dengan tulisan vertikal -->
          <rect
            x="599"
            y="120"
            width="50"
            height="55"
            fill="white"
            stroke="black"
            stroke-width="1.5"
          ></rect>
          <text
            x="622.5"
            y="147.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            style="writing-mode: vertical-lr; font-weight: bold"
          >
            MUSHOLA
          </text>
          <text
            x="622.5"
            y="200.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            style="writing-mode: vertical-lr; font-weight: bold"
          >
            FASUM
          </text>
          <text
            x="510.5"
            y="180.5"
            font-size="10"
            text-anchor="middle"
            alignment-baseline="middle"
            fill="black"
            style="writing-mode: vertical-lr; font-weight: bold"
          >
            FASUM
          </text>
        </svg>
      </div>

<div style="margin-top: -200px; text-align: left; margin-left: 10px">
    <h3>Keterangan:</h3>
    <div style="align-items: center; gap: 20px">
        <div style="display: flex; align-items: center">
            <div style="width: 30px; height: 30px; background-color: white; border: 2px solid black;"></div>
            <span style="margin-left: 10px">Kosong: <span id="kosong-count">0</span></span>
        </div>
        <div style="display: flex; align-items: center; margin-top: 10px;">
            <div style="width: 30px; height: 30px; background-color: yellow; border: 2px solid black;"></div>
            <span style="margin-left: 10px">Booking: <span id="booking-count">0</span></span>
        </div>
        <div style="display: flex; align-items: center; margin-top: 10px;">
            <div style="width: 30px; height: 30px; background-color: red; border: 2px solid black;"></div>
            <span style="margin-left: 10px">Kredit: <span id="kredit-count">0</span></span>
        </div>
        <div style="display: flex; align-items: center; margin-top: 10px;">
            <div style="width: 30px; height: 30px; background-color: blue; border: 2px solid black;"></div>
            <span style="margin-left: 10px">Cash: <span id="cash-count">0</span></span>
        </div>

        <!-- Modal Bootstrap -->
        <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="infoModalLabel"><i class="fa-solid fa-house me-2"></i>Informasi Rumah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="blok-info">Blok: </p>
                        <p id="harga-info">Harga Jual: </p>
                        <p id="status-info">Status: </p>
                        <p id="keterangan-info">Keterangan Rumah: </p>
                    </div>
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
      document.getElementById("saveBtn").addEventListener("click", function () {
        // Ambil semua elemen rect
        var houses = document.querySelectorAll(".house");
        var dataToSend = [];

        houses.forEach(function (house) {
          var blok = house.getAttribute("data-blok");
          var status = house.getAttribute("data-status");

          // Siapkan data untuk dikirim
          dataToSend.push({
            blok_rumah: blok,
            status: status,
          });
        });

        // Kirim data ke server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "simpan_data_rumah.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send(JSON.stringify(dataToSend));

        xhr.onload = function () {
          if (xhr.status === 200) {
            alert("Data berhasil disimpan");
          } else {
            alert("Terjadi kesalahan saat menyimpan data");
          }
        };
      });
    </script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil data dari server
    fetch('get_data.php')
        .then(response => response.json())
        .then(data => {
            let kosongCount = 0;
            let bookingCount = 0;
            let kreditCount = 0;
            let cashCount = 0;

            data.forEach(item => {
                var house = document.getElementById('house-' + item.blok_rumah);
                var fillColor;

                switch (item.status) {
                    case 'Kosong':
                        fillColor = 'white';
                        kosongCount++;
                        break;
                    case 'Booking':
                        fillColor = 'yellow';
                        bookingCount++;
                        break;
                    case 'Kredit':
                        fillColor = 'red';
                        kreditCount++;
                        break;
                    case 'Cash':
                        fillColor = 'blue';
                        cashCount++;
                        break;
                    default:
                        fillColor = 'white'; // Warna default jika status tidak diketahui
                }

                if (house) {
                    house.setAttribute('fill', fillColor);
                }
            });

            // Tampilkan jumlah berdasarkan status
            document.getElementById('kosong-count').textContent = kosongCount;
            document.getElementById('booking-count').textContent = bookingCount;
            document.getElementById('kredit-count').textContent = kreditCount;
            document.getElementById('cash-count').textContent = cashCount;
        })
        .catch(error => console.error('Error:', error));
});

</script>
  <script>
       $(document).ready(function() {
    $('.house').click(function() {
        var block = $(this).data('blok');

        // Request to get info from server
        $.ajax({
            url: 'get_info.php',
            method: 'GET',
            data: { blok: block },
            success: function(response) {
                console.log('Server response:', response); // Debugging line

                try {
                    // Parse JSON if not already parsed
                    var data = typeof response === 'string' ? JSON.parse(response) : response;

                    if (data) {
                        // Update modal content
                        $('#blok-info').text('Blok: ' + (data.blok_rumah || 'Tidak tersedia'));
                        $('#harga-info').text('Harga Jual: ' + (data.harga_jual || 'Tidak tersedia'));
                        $('#status-info').text('Status: ' + (data.status || 'Tidak tersedia'));
                        $('#keterangan-info').text('Keterangan Rumah: ' + (data.keterangan || 'Tidak tersedia'));

                        // Show the modal
                        var myModal = new bootstrap.Modal(document.getElementById('infoModal'));
                        myModal.show();
                    } else {
                        alert('Data tidak ditemukan');
                    }
                } catch (error) {
                    console.error('Error parsing response:', error);
                    alert('Terjadi kesalahan saat memproses data');
                }
            },
            error: function() {
                alert('Terjadi kesalahan saat mengambil data');
            }
        });
    });
});
</script>
    <script src="admin.js"></script>
</body>
</html>
