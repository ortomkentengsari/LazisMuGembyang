<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Keuangan - LazisMu Gembyang</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .hero-section { background: linear-gradient(135deg, #0d5c3a 0%, #198754 100%); color: white; padding: 60px 0; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; }
        .card-menu { transition: transform 0.2s; cursor: pointer; border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .card-menu:hover { transform: translateY(-5px); box-shadow: 0 8px 15px rgba(0,0,0,0.1); }
        .nav-tabs .nav-link.active { background-color: #198754; color: white; border-color: #198754; }
    </style>
</head>
<body>

    <!-- HERO / WELCOME SECTION -->
    <div class="hero-section text-center mb-5">
        <div class="container">
            <img src="https://via.placeholder.com/100" alt="Logo LazisMu" class="mb-3 rounded-circle" style="background: white; padding: 5px;"> <!-- Ganti dengan URL logo LazisMu asli nanti -->
            <h1 class="fw-bold">LazisMu Kantor Layanan Gembyang</h1>
            <p class="lead">Sistem Informasi Input & Rekapitulasi Data Keuangan</p>
            <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill">Ortom Kentengsari</span>
        </div>
    </div>

    <div class="container mb-5">
        <!-- TABS NAVIGASI UTAMA -->
        <ul class="nav nav-tabs justify-content-center mb-4 fs-5" id="mainTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"><i class="fa-solid fa-house me-2"></i>Selamat Datang</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin-tab-pane" type="button" role="tab"><i class="fa-solid fa-user-lock me-2"></i>Input Admin</button>
            </li>
        </ul>

        <!-- KONTEN TABS -->
        <div class="tab-content" id="mainTabContent">
            
            <!-- 1. LAMAN SELAMAT DATANG (REKAP SALDO) -->
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel">
                <div class="row g-4 mb-4">
                    <div class="col-10 mx-auto text-center">
                        <h3 class="fw-bold text-success mb-3">Ringkasan Dana Umat</h3>
                        <p class="text-muted">Berikut adalah rekapitulasi perolehan dana per kategori yang berhasil dihimpun.</p>
                    </div>
                </div>
                
                <!-- Dashboard Grid Rekap Angka -->
                <div class="row g-3">
                    <!-- Card Template (Nanti angka Rp diambil otomatis dari database) -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card p-3 card-menu border-start border-success border-4">
                            <h6 class="text-muted text-uppercase small">Zakat Mal</h6>
                            <h4 class="fw-bold text-success">Rp 0</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card p-3 card-menu border-start border-success border-4">
                            <h6 class="text-muted text-uppercase small">Zakat Fitrah</h6>
                            <h4 class="fw-bold text-success">Rp 0</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card p-3 card-menu border-start border-primary border-4">
                            <h6 class="text-muted text-uppercase small">Infaq</h6>
                            <h4 class="fw-bold text-primary">Rp 0</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card p-3 card-menu border-start border-primary border-4">
                            <h6 class="text-muted text-uppercase small">Shadaqah</h6>
                            <h4 class="fw-bold text-primary">Rp 0</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card p-3 card-menu border-start border-warning border-4">
                            <h6 class="text-muted text-uppercase small">Kencleng</h6>
                            <h4 class="fw-bold text-warning">Rp 0</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card p-3 card-menu border-start border-danger border-4">
                            <h6 class="text-muted text-uppercase small">Qurban</h6>
                            <h4 class="fw-bold text-danger">Rp 0</h4>
                        </div>
                    </div>
                    <!-- Amal Usaha -->
                    <div class="col-md-6">
                        <div class="card p-3 card-menu border-start border-info border-4">
                            <h6 class="text-muted text-uppercase small">Amal Usaha: TPQ</h6>
                            <h4 class="fw-bold text-info">Rp 0</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 card-menu border-start border-info border-4">
                            <h6 class="text-muted text-uppercase small">Amal Usaha: BA Al-Hidayah</h6>
                            <h4 class="fw-bold text-info">Rp 0</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. LAMAN INPUT ADMIN -->
            <div class="tab-pane fade" id="admin-tab-pane" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card p-4 shadow-sm rounded-4">
                            <h4 class="fw-bold text-success mb-4 text-center"><i class="fa-solid fa-pen-to-square me-2"></i>Form Input Keuangan Masuk</h4>
                            
                            <form id="formKeuangan">
                                <!-- Pilihan Kategori / Menu Sesuai Permintaan -->
                                <div class="mb-3">
                                    <label for="kategori" class="form-label fw-semibold">Pilih Kategori Dana</label>
                                    <select class="form-select" id="kategori" required>
                                        <option value="" disabled selected>-- Pilih Kategori --</option>
                                        <option value="Zakat Mal">Zakat Mal</option>
                                        <option value="Zakat Fitrah">Zakat Fitrah</option>
                                        <option value="Infaq">Infaq</option>
                                        <option value="Shadaqah">Shadaqah</option>
                                        <option value="Kencleng">Kencleng</option>
                                        <option value="Qurban">Qurban</option>
                                        <option value="TPQ">Amal Usaha: TPQ</option>
                                        <option value="BA Al-Hidayah">Amal Usaha: BA Al-Hidayah</option>
                                    </select>
                                </div>

                                <!-- Nama Donatur / Muzakki -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-semibold">Nama Donatur / Sumber Dana</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Contoh: Hamba Allah / Toko Makmur" required>
                                </div>

                                <!-- Jumlah Uang -->
                                <div class="mb-3">
                                    <label for="nominal" class="form-label fw-semibold">Nominal Uang (Rp)</label>
                                    <input type="number" class="form-control" id="nominal" placeholder="Masukkan angka saja, misal: 50000" required>
                                </div>

                                <!-- Tanggal Transaksi -->
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-semibold">Tanggal Diterima</label>
                                    <input type="date" class="form-control" id="tanggal" required>
                                </div>

                                <!-- Keterangan Tambahan -->
                                <div class="mb-4">
                                    <label for="keterangan" class="form-label fw-semibold">Keterangan / Catatan</label>
                                    <textarea class="form-control" id="keterangan" rows="3" placeholder="Opsional (misal: Zakat Mal tahun 2026, Infaq Jumat Jumantara, dll)"></textarea>
                                </div>

                                <!-- Tombol Submit -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-lg fw-bold"><i class="fa-solid fa-paper-plane me-2"></i>Simpan Data</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 KL LazisMu Gembyang - Ortom Kentengsari. Powered by GitHub.</p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Set default tanggal hari ini pada form
        document.getElementById('tanggal').valueAsDate = new Date();

        // Logika ketika form disubmit (sementara masih simulasi alert)
        document.getElementById('formKeuangan').addEventListener('submit', function(e) {
            e.preventDefault();
            const kategori = document.getElementById('kategori').value;
            const nama = document.getElementById('nama').value;
            const nominal = document.getElementById('nominal').value;
            
            alert(`Data Berhasil Ditangkap!\nKategori: ${kategori}\nSumber: ${nama}\nNominal: Rp ${parseInt(nominal).toLocaleString('id-ID')}\n\nSelanjutnya kita akan hubungkan form ini ke Google Sheets.`);
        });
    </script>
</body>
</html>
