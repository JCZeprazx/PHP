<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$circle = new Lingkaran(10);
$rectangular = new PersegiPanjang(10, 5);
$triangle = new Segitiga(3, 4);

$thead = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card mt-5">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <?php
                                foreach ($thead as $th) {
                                ?>
                                    <th><?= $th ?></th>
                                <?php
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $circle->namaBidang() ?></td>
                                <td>Jari-jari = <?= $circle->jari2 ?></td>
                                <td><?= $circle->luasBidang() ?></td>
                                <td><?= $circle->kelilingBidang() ?></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><?= $rectangular->namaBidang() ?></td>
                                <td>
                                    Panjang = <?= $rectangular->panjang ?><br>
                                    Lebar = <?= $rectangular->lebar ?>
                                </td>
                                <td><?= $rectangular->luasBidang() ?></td>
                                <td><?= $rectangular->kelilingBidang() ?></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><?= $triangle->namaBidang() ?></td>
                                <td>
                                    Alas = <?= $triangle->alas ?><br>
                                    Tinggi = <?= $triangle->tinggi ?>
                                </td>
                                <td><?= $triangle->luasBidang() ?></td>
                                <td><?= $triangle->kelilingBidang() ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
