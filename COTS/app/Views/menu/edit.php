<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow rounded-3 overflow-hidden" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0 fw-bold">Edit Menu</h4>
        </div>
        <div class="card-body">
            <form id="formEdit">
                <div class="mb-3">
                    <label>Nama Menu</label>
                    <input type="text" name="namaMenu" class="form-control" value="<?= $menu['namaMenu'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="Makanan" 
                            <?php if ($menu['kategori'] == 'Makanan') { echo 'selected'; } ?>
                        >Makanan</option>
                        <option value="Minuman" 
                            <?php if ($menu['kategori'] == 'Minuman') { echo 'selected'; } ?>
                        >Minuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" value="<?= $menu['harga'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Stok Tersedia</label>
                    <input type="number" name="stok" class="form-control" value="<?= $menu['stok'] ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Update Data</button>
                <a href="/" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // Proses Submit (Update) dengan AJAX
    $('#formEdit').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/menu/update/<?= $menu['menuID'] ?>',
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