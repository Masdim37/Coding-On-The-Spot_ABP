<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Stok Toastopia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Daftar Menu Toastopia</h4>
            <a href="/menu/create" class="btn btn-light btn-sm">Tambah Menu Baru</a>
        </div>
        <div class="card-body">
            <table id="tabelMenu" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // Inisialisasi DataTables dengan JSON
    let table = $('#tabelMenu').DataTable({
        "ajax": {
            "url": "/menu/get_data_json",
            "dataSrc": ""
        },
        "columns": [
            { "data": null, "render": function (data, type, row, meta) { return meta.row + 1; } },
            { "data": "namaMenu" },
            { "data": "kategori" },
            { "data": "harga", "render": $.fn.dataTable.render.number(',', '.', 0, 'Rp ') },
            { "data": "stok" },
            {
                "data": "menuID",
                "render": function(data, type, row) {
                    return `<a href="/menu/edit/${data}" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm btn-hapus" data-id="${data}">Hapus</button>`;
                }
            }
        ]
    });

    // Fungsionalitas Hapus (Delete) dengan AJAX & SweetAlert2
    $('#tabelMenu').on('click', '.btn-hapus', function() {
        let id = $(this).data('id');
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/menu/delete/' + id,
                    type: 'DELETE',
                    success: function(response) {
                        Swal.fire('Terhapus!', response.message, 'success');
                        table.ajax.reload(); // Refresh tabel JSON otomatis
                    }
                });
            }
        });
    });
});
</script>
</body>
</html>