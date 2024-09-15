<!DOCTYPE html>
<html>
  <head>
    <title>Kotak Goblok Anjay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <style>
        /* Optional style */
      
        .house {
            cursor: pointer; /* Menunjukkan bahwa elemen ini bisa diklik */
        }
    </style>
  </head>
  <body>
    <div class="svg-container">
      <svg width="1000" height="520">
        <!-- Blok Rumah Kosong -->
        <rect
        id="house-C-135"
          x="297"
          y="157"
          class="house"
          data-blok="C-135"
          data-status="Kosong"
          data-kredit="Belum Lunas"
          width="100"
          height="52"
          fill="white"
          stroke="black"
          stroke-width="1.5"
        ></rect>
        <text
          x="313"
          y="185"
          font-size="10"
          font-weight="bold"
          text-anchor="middle"
          alignment-baseline="middle"
          fill="black"
          transform="rotate(-2, 313, 185)"
        >
          C-135
        </text>

        <!-- Blok Rumah Kosong -->
        <rect
         id="house-C-129"
          x="325"
          y="157"
          class="house"
          data-blok="C-129"
          data-status="Kosong"
          data-kredit="Belum Lunas"
          width="100"
          height="52"
          fill="white"
          stroke="black"
          stroke-width="1.5"
        ></rect>
        <text
          x="341"
          y="185"
          font-size="10"
          font-weight="bold"
          text-anchor="middle"
          alignment-baseline="middle"
          fill="black"
          transform="rotate(-2, 341, 185)"
        >
          C-129
        </text>

        <!-- Blok Rumah Kosong -->
        <rect
         id="house-C-127"
          x="353"
          y="157"
          class="house"
          data-blok="C-127"
          data-status="Kosong"
          data-kredit="Belum Lunas"
          width="28"
          height="52"
          fill="white"
          stroke="black"
          stroke-width="1.5"
        ></rect>
        <text
          x="370"
          y="185"
          font-size="10"
          font-weight="bold"
          text-anchor="middle"
          alignment-baseline="middle"
          fill="black"
          transform="rotate(-2, 370, 185)"
        >
          C-127
        </text>

        <!-- Blok Rumah Kosong -->
        <rect
         id="house-C-125"
          x="381"
          y="157"
          class="house"
          data-blok="C-125"
          data-status="Kosong"
          data-kredit="Belum Lunas"
          width="28"
          height="52"
          fill="white"
          stroke="black"
          stroke-width="1.5"
        ></rect>
        <text
          x="398"
          y="185"
          font-size="10"
          font-weight="bold"
          text-anchor="middle"
          alignment-baseline="middle"
          fill="black"
          transform="rotate(-2, 398, 185)"
        >
          C-125
        </text>

        <!-- Blok Rumah Kosong -->
        <rect
         id="house-C-123"
          x="409"
          y="157"
          class="house"
          data-blok="C-123"
          data-status="Kosong"
          data-kredit="Belum Lunas"
          width="28"
          height="52"
          fill="white"
          stroke="black"
          stroke-width="1.5"
        ></rect>
        <text
          x="426"
          y="185"
          font-size="10"
          font-weight="bold"
          text-anchor="middle"
          alignment-baseline="middle"
          fill="black"
          transform="rotate(-2, 426, 185)"
        >
          C-123
        </text>
      </svg>
    </div>
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Informasi Blok Rumah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="blok-info">Blok: </p>
                    <p id="harga-info">Harga Jual: </p>
                    <p id="status-info">Status: </p>
                </div>
            </div>
        </div>
    </div>
    <button id="saveBtn">Simpan Data ke Database</button>
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
                    data.forEach(item => {
                        var house = document.getElementById('house-' + item.blok_rumah);
                        var fillColor;

                        switch (item.status) {
                            case 'Kosong':
                                fillColor = 'white';
                                break;
                            case 'Booking':
                                fillColor = 'yellow';
                                break;
                            case 'Kredit':
                                fillColor = 'maroon';
                                break;
                            case 'Cash':
                                fillColor = 'blue';
                                break;
                            default:
                                fillColor = 'white'; // Default color if status is unknown
                        }

                        if (house) {
                            house.setAttribute('fill', fillColor);
                        }
                    });
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
  </body>
</html>
