<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Update Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        .btn-back {
            background: #6a11cb;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
        }
        .btn-back:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 text-center">
                <h3 class="fw-bold text-success mb-3">✅ Data Produk Berhasil Diperbarui</h3>
                <p><strong>Nama Baru:</strong> {{ $namaBaru }}</p>
                <p><strong>Harga Baru:</strong> Rp{{ number_format($hargaBaru, 0, ',', '.') }}</p>
                <p><strong>Kategori Baru:</strong> {{ $kategoriBaru }}</p>

                <a href="/produk/edit" class="btn btn-back text-white mt-3">⬅️ Edit Lagi</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
