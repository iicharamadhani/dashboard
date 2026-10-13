<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Startmart</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <aside class="col-md-2 bg-light min-vh-100 p-3 border-end">
            <a href="dashboard.php" class="d-block mb-3 text-decoration-none">
                <i class="bi bi-house-door me-2"></i>Dashboard
            </a>
            <a href="#" class="d-block mb-3 text-decoration-none">
                <i class="bi bi-cart3 me-2"></i>Orders
            </a>
            <a href="dashboard.php" class="d-block mb-3 text-decoration-none">
                <i class="bi bi-box-seam me-2"></i>Products
            </a>
            <a href="#" class="d-block mb-3 text-decoration-none">
                <i class="bi bi-people me-2"></i>Customers
            </a>
            <a href="#" class="d-block mb-3 text-decoration-none">
                <i class="bi bi-bar-chart-line me-2"></i>Reports
            </a>
            <a href="#" class="d-block text-decoration-none">
                <i class="bi bi-plug me-2"></i>Integrations
            </a>
        </aside>

        <main class="col-md-10 p-4">
            <h2>Dashboard</h2>
            <hr>

            <h4>Data Produk</h4>

            <button type="button" class="btn btn-secondary btn-sm mb-3">
                Add Product
            </button>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include 'koneksi.php';

                        $query = mysqli_query($dbconnect, "SELECT * FROM produk");
                        $no = 1;

                        while ($tampil = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($tampil['nama_barang']); ?></td>
                            <td>Rp. <?= number_format($tampil['harga'], 0, ',', '.'); ?></td>
                            <td><?= htmlspecialchars($tampil['stok']); ?></td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>

                                <button type="button" class="btn btn-success btn-sm">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>