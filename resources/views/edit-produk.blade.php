<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .btn-custom {
            background: #6a11cb;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h3 class="text-center fw-bold mb-4" style="color:#6a11cb;">🛠️ Edit Data Produk</h3>

                <form action="/produk/update" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Produk:</label>
                        <input type="text" name="nama" class="form-control" value="Laptop Lama" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Harga Produk:</label>
                        <input type="number" name="harga" class="form-control" value="5000000" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Kategori:</label>
                        <select name="kategori" class="form-select">
                            <option value="Elektronik">Elektronik</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-custom text-white w-100 fw-semibold">
                        💾 Perbarui Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
