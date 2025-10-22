<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Istana Cemilan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background: #ff7f50;
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #ff9966;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center mb-4 fw-bold text-uppercase" style="color:#ff7f50;">Form Tambah Produk</h3>

                <form action="/simpan-produk" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama produk..." required>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Contoh: 10000" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="Jumlah stok tersedia..." required>
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label fw-semibold">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Pedas">Pedas</option>
                            <option value="Manis">Manis</option>
                            <option value="Asin">Asin</option>
                            <option value="Campur">Campur</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Ceritakan sedikit tentang produk ini..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-custom w-100 text-white fw-semibold">💾 Simpan Produk</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
