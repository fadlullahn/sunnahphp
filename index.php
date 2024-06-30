<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Data Sunnah</title>
    <style>
        .container {
            max-width: 800px;
            width: 100%;
            padding: 1em;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Menempatkan konten di tengah vertikal layar */
            margin: 0;
        }

        .modal {
            display: none; /* Modal defaultnya disembunyikan */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5); /* Latar belakang dengan transparansi */
            z-index: 1000; /* Menempatkan modal di atas elemen lain */
            overflow: auto; /* Aktifkan scrolling jika konten melebihi ukuran modal */
        }
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto; /* Posisikan modal di tengah layar */
            padding: 1em;
            border: 1px solid #888;
            border-radius: 8px;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            position: relative;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Gaya formulir */
        form {
            max-width: 400px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }
        div + div {
            margin-top: 1em;
        }
        label {
            display: block;
            margin-bottom: .5em;
        }
        input, textarea, select {
            width: 100%;
            padding: .5em;
            border: 1px solid #ccc;
            border-radius: 1em;
            font-size: 1em;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23444444" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5H7z"/></svg>');
            background-repeat: no-repeat;
            background-position: right .7em top 50%;
            padding-right: 2.5em;
            cursor: pointer;
        }
        button {
            padding: 0.7em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 1em;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Buat Data Sunnah</h2>
        <button onclick="openModal('sunnahModal')">Buat Data Sunnah</button>

        <h2>Buat Data Kategori</h2>
        <button onclick="openModal('kategoriModal')">Buat Data Kategori</button>
    </div>
  

    <!-- Modal sunnah -->
    <div id="sunnahModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('sunnahModal')">&times;</span>
            <h2>Buat Data Sunnah</h2>
            <form id="sunnahForm">
                <div>
                    <label for="judul">Judul:</label>
                    <input type="text" id="judul" name="judul" required>
                </div>
                <div>
                    <label for="desk">Deskripsi:</label>
                    <textarea id="desk" name="desk" required></textarea>
                </div>
                <div>
                    <label for="kategori">Kategori :</label>
                    <select id="kategori" name="kategori" required></select>
                </div>
                <div>
                    <label for="sub">Sub Kategori :</label>
                    <select id="sub" name="sub" required>
                        <option value="0">Tentukan Sub Kategori Jika Ada</option>
                    </select>
                </div>
                <div>
                    <label for="favorit">Masukkan Dalam Daftar Reminder :</label>
                    <select name="favorit" id="favorit">
                        <option value="0">Tidak</option>
                        <option value="99">Iyya</option>
                    </select>
                </div>
                <div id="timeFields" style="display: none;">
                    <div>
                        <label for="hour">Jam:</label>
                        <input type="number" id="hour" name="hour" placeholder="Isi Nilai 00-23">
                    </div>
                    <div>
                        <label for="minute">Menit:</label>
                        <input type="number" id="minute" name="minute" placeholder="Isi Nilai 00-59">
                    </div>
                </div>
                <div>
                    <button type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>

  

    <!-- Modal kategori -->
    <div id="kategoriModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('kategoriModal')">&times;</span>
            <h2>Buat Data Kategori</h2>
            <form id="kategoriForm">
                <div>
                    <label for="namakategori">Nama Kategori:</label>
                    <input type="text" id="namakategori" name="namakategori" required placeholder="Kategori Wajib Diisi">
                </div>
                <div>
                    <label for="subkategori">Sub Kategori:</label>
                    <input type="text" id="subkategori" name="subkategori" placeholder="Kosongkan Jika Kategori Tidak Memiliki Sub-Kategori">
                </div>
                <div>
                    <button type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Fungsi untuk membuka modal
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'block'; // Tampilkan modal
        }

        // Fungsi untuk menutup modal
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'none'; // Sembunyikan modal
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data kategori dari server dan tambahkan ke dalam select kategori dan sub kategori
            fetch('kategori/getretrieve.php')
            .then(response => response.json())
            .then(data => {
                if (data.kode === 1) {
                    const kategoriSelect = document.getElementById('kategori');
                    const subkategoriSelect = document.getElementById('sub');
                    const existingKategoriValues = new Set(); // Set untuk menyimpan nilai kategori yang sudah ada
                    const existingSubkategoriValues = new Set(); // Set untuk menyimpan nilai sub kategori yang sudah ada

                    // Iterasi data untuk menambahkan opsi ke dalam select kategori dan sub kategori
                    data.data.forEach(kategori => {
                        // Pastikan nilai kategori belum ada sebelumnya
                        if (!existingKategoriValues.has(kategori.namakategori)) {
                            const optionKategori = document.createElement('option');
                            optionKategori.value = kategori.namakategori;
                            optionKategori.textContent = kategori.namakategori;
                            kategoriSelect.appendChild(optionKategori);

                            // Tambahkan nilai kategori ke dalam Set existingKategoriValues
                            existingKategoriValues.add(kategori.namakategori);
                        }

                        // Pastikan nilai sub kategori belum ada sebelumnya
                        if (!existingSubkategoriValues.has(kategori.subkategori)) {
                            const optionSubkategori = document.createElement('option');
                            optionSubkategori.value = kategori.subkategori;
                            optionSubkategori.textContent = kategori.subkategori;
                            subkategoriSelect.appendChild(optionSubkategori);

                            // Tambahkan nilai sub kategori ke dalam Set existingSubkategoriValues
                            existingSubkategoriValues.add(kategori.subkategori);
                        }
                    });
                } else {
                    alert(data.pesan);
                }
            })
            .catch(error => console.error('Error:', error));

            // Tambahkan event listener untuk submit form sunnah
            document.getElementById('sunnahForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                fetch('sunnah/create.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.pesan);
                    if (data.kode === 1) {
                        this.reset();
                        closeModal('sunnahModal'); // Tutup modal setelah data tersimpan
                        window.location.reload(); // Muat ulang halaman jika perlu
                    }
                })
                .catch(error => console.error('Error:', error));
            });

            // Tambahkan event listener untuk submit form kategori
            document.getElementById('kategoriForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                fetch('kategori/create.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.pesan);
                    if (data.kode === 1) {
                        this.reset();
                        closeModal('kategoriModal'); // Tutup modal setelah data tersimpan
                        window.location.reload(); // Muat ulang halaman jika perlu
                    }
                })
                .catch(error => console.error('Error:', error));
            });

            // Ambil elemen select dan input untuk jam dan menit
            const favoritSelect = document.getElementById('favorit');
            const timeFields = document.getElementById('timeFields');
            const hourInput = document.getElementById('hour');
            const minuteInput = document.getElementById('minute');

            // Tambahkan event listener untuk perubahan pada select favorit
            favoritSelect.addEventListener('change', function() {
                // Periksa nilai yang dipilih
                if (favoritSelect.value === '99') {
                    // Jika dipilih 'Iyya', tampilkan field jam dan menit
                    timeFields.style.display = 'block';
                    hourInput.setAttribute('required', ''); // Tambahkan atribut required
                    minuteInput.setAttribute('required', ''); // Tambahkan atribut required
                } else {
                    // Jika dipilih 'Tidak', sembunyikan field jam dan menit
                    timeFields.style.display = 'none';
                    hourInput.removeAttribute('required'); // Hapus atribut required
                    minuteInput.removeAttribute('required'); // Hapus atribut required
                }
            });
        });
    </script>
</body>
</html>
