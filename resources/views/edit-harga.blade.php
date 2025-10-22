<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Harga Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f9d423, #ff4e50);
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .btn-custom {
            background: linear-gradient(135deg, #ff512f, #dd2476);
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
        .info-box {
            background: rgba(255,255,255,0.8);
            border-radius: 10px;
            padding: 10px 15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h3 class="text-center mb-4 fw-bold text-danger">🛠️ Edit Harga Produk</h3>

                <div class="info-box">
                    <p><strong>Nama Produk:</strong> Laptop ASUS</p>
                    <p><strong>Kategori:</strong> Elektronik</p>
                    <p><strong>Harga Saat Ini:</strong> Rp5.000.000</p>
                </div>

                <form action="/produk/update-harga" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Harga Baru:</label>
                        <input type="number" name="harga" class="form-control" value="5000000" required>
                    </div>

                    <button type="submit" class="btn btn-custom text-white w-100 fw-semibold">
                        💾 Perbarui Harga
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
