<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Tambah Menu Baru</h4>
        </div>
        <div class="card-body">
            <form id="formTambah">
                <div class="mb-3">
                    <label>Nama Menu</label>
                    <input type="text" name="namaMenu" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control select2" required>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Topping">Topping Tambahan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Stok Awal</label>
                    <input type="number" name="stok" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="/" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // Inisialisasi Plugin jQuery Select2
    $('.select2').select2();

    // Proses Submit (Create) dengan AJAX
    $('#formTambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/menu/store',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                Swal.fire('Berhasil!', response.message, 'success').then(() => {
                    window.location.href = '/';
                });
            }
        });
    });
});
</script>
</body>
</html>