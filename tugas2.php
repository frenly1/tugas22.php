<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aplikasi Kasir </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>


    <!-- Content -->
    <div class="container mt-4">
        <h2 class="text-center">Aplikasi Kasir</h2>
        <!-- Bagian belanja-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Form Belanja</h4>
                    <form method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <select class="form-select" name="produk">
                            <option>=== Pilih Produk ===</option>
                            <option value="TV">TV</option>
                            <option value="Kulkas">Kulkas</option>
                            <option value="Mesin Cuci">Mesin Cuci</option>
                            <option value="AC">AC</option>
                        </select>
                        <div class="mb-3">
                            <label for="jumlah_beli" class="form-label">Jumlah Beli</label>
                            <input type="text" class="form-control" id="jumlah_beli" name="jumlah_beli">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                    </form>
                </div>
                <!-- Akhir  Form Belanja -->



                <!-- Bagian Daftar harga-->
                <div class="col-lg-6">
                    <h4>Daftar Produk & Dan Harga</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>TV</td>
                                <td>Rp. 1.500.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Kulkas</td>
                                <td>Rp. 3.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mesin Cuci</td>
                                <td>Rp. 2.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>AC</td>
                                <td>Rp. 1.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Akhir  Daftar Produk  Harga -->

        <!-- Bagian Logic PHP -->
        <?php

        switch ($produk = $_POST['produk']) {
            case "TV":
                $harga_satuan = 1500000;
                break;
            case "Kulkas":
                $harga_satuan = 3000000;
                break;
            case "Mesin Cuci":
                $harga_satuan = 2000000;
                break;
            case "AC":
                $harga_satuan = 1000000;
                break;
            default:
                echo "Produk tidak ada";
        }

        if (isset($_POST['submit'])) {

            $nama = $_POST['nama'];
            $jumlah_beli = $_POST['jumlah_beli'];
            $total_belanja = $jumlah_beli * $harga_satuan;
            $diskon = 0.20 * $total_belanja;
            $ppn = 0.10 * ($total_belanja - $diskon);
            $harga_bersih = ($total_belanja - $diskon) + $ppn;
        }
        ?>
        <!-- Akhir B Logic PHP -->

        <!--  Hasil pembelanjaan -->
        <div class="col-lg-6 mx-auto mt-3">
            <h4 class="text-center">Struk Pembelanjaan</h4>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nama Pelangan</td>
                        <td><?= $nama ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Produk Pilihan</td>
                        <td><?= $produk ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jumlah Beli</td>
                        <td><?= $jumlah_beli ?></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Harga Satuan</td>
                        <td><?= $harga_satuan ?></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Total Belanja</td>
                        <td><?= $total_belanja ?></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Potongan Diskon</td>
                        <td><?= $diskon ?></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>PPN</td>
                        <td><?= $ppn ?></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Harga Bersih</td>
                        <td><?= $harga_bersih ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Akhir Hasil pembelanjaan -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
