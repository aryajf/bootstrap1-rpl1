<?php require_once('components/Header.php') ?>
<div class="container-fluid">
    <div class="row">
            <?php require_once('components/Nav.php') ?>
            <div class="col-9 py-3">
                <h2>Data Produk</h2>
                <div><button type="button" class="btn btn-primary">Tambah Produk</button></div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th class="align-middle" scope="row">1</th>
                            <td class="align-middle">Printer Hp Laserjet</td>
                            <td class="align-middle">Rp.500.000</td>
                            <td><img src="assets/image.jpg" class="image-table" alt=""></td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm">Edit Produk</button>
                                <button type="button" class="btn btn-danger btn-sm">Hapus Produk</button>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle" scope="row">2</th>
                            <td class="align-middle">Printer DeskJet</td>
                            <td class="align-middle">Rp.500.000</td>
                            <td><img src="assets/image.jpg" class="image-table" alt=""></td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm">Edit Produk</button>
                                <button type="button" class="btn btn-danger btn-sm">Hapus Produk</button>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle" scope="row">3</th>
                            <td class="align-middle">Printer Epson</td>
                            <td class="align-middle">Rp.400.000</td>
                            <td><img src="assets/image.jpg" class="image-table" alt=""></td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm">Edit Produk</button>
                                <button type="button" class="btn btn-danger btn-sm">Hapus Produk</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once('components/Footer.php') ?>