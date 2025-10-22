<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga Produk Diperbarui</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fff8f0;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        .btn-back {
            background: linear-gradient(135deg, #ff512f, #dd2476);
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
                <h3 class="fw-bold text-success mb-3">✅ Harga Berhasil Diperbarui</h3>
                <p>Harga produk sekarang menjadi:</p>
                <h4 class="text-danger fw-bold">Rp{{ number_format($hargaBaru, 0, ',', '.') }}</h4>
                <p class="text-muted">(Data lain seperti nama dan kategori tidak berubah)</p>

                <a href="/produk/edit-harga" class="btn btn-back text-white mt-3">⬅️ Ubah Lagi</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
