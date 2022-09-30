<?php
$m1 = ['nim' => '11012202', 'nama' => 'Regas', 'nilai' => 85];
$m2 = ['nim' => '11012203', 'nama' => 'Abdul', 'nilai' => 90];
$m3 = ['nim' => '11012204', 'nama' => 'Ahmad', 'nilai' => 65];
$m4 = ['nim' => '11012205', 'nama' => 'Tina', 'nilai' => 40];
$m5 = ['nim' => '11012206', 'nama' => 'Hana', 'nilai' => 95];
$m6 = ['nim' => '11012207', 'nama' => 'Budi', 'nilai' => 30];
$m7 = ['nim' => '11012208', 'nama' => 'Galih', 'nilai' => 75];
$m8 = ['nim' => '11012209', 'nama' => 'Sukron', 'nilai' => 65];
$m9 = ['nim' => '11012210', 'nama' => 'Putra', 'nilai' => 85];
$m10 = ['nim' => '11012211', 'nama' => 'Putri', 'nilai' => 60];


$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
$judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$jumlahMahasiswa = count($mahasiswa);
$nilai = array_column($mahasiswa, 'nilai');
$totalNilai = array_sum($nilai);
$maxNilai = max($nilai);
$minNilai = min($nilai);
$rataRata = $totalNilai / $jumlahMahasiswa;

$tfoot = [
    'Nilai Tertinggi' => $maxNilai,
    'Nilai Terendah' => $minNilai,
    'Nilai Rata-rata' => $rataRata,
    'Jumlah Siswa' => $jumlahMahasiswa
]

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas 3 php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card m-4">
                <div class="card-body">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr class="table-primary">
                                <?php
                                foreach ($judul as $thead) {
                                ?>
                                    <th scope="col"><?= $thead ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i <= 9; $i++) {
                                $keterangan[$i] = ($mahasiswa[$i]['nilai'] >= 60) ? "Lulus" : "Tidak Lulus";
                                if ($mahasiswa[$i]['nilai'] >= 85) {
                                    $grade = "A";
                                } elseif ($mahasiswa[$i]['nilai'] >= 70) {
                                    $grade = "B";
                                } elseif ($mahasiswa[$i]['nilai'] >= 55) {
                                    $grade = "C";
                                } elseif ($mahasiswa[$i]['nilai'] >= 40) {
                                    $grade = "D";
                                } else {
                                    $grade = "E";
                                }

                                switch ($grade) {
                                    case "A":
                                        $predikat = "Memuaskan";
                                        break;
                                    case "B":
                                        $predikat = "Bagus";
                                        break;
                                    case "C":
                                        $predikat = "Cukup";
                                        break;
                                    case "D":
                                        $predikat = "Kurang";
                                        break;
                                    case "E":
                                        $predikat = "Buruk";
                                        break;
                                    default:
                                        break;
                                }


                            ?>
                                <tr>
                                    <td><?= $i + 1; ?></td>
                                    <td><?= $mahasiswa[$i]['nim'] ?></td>
                                    <td><?= $mahasiswa[$i]['nama'] ?></td>
                                    <td><?= $mahasiswa[$i]['nilai'] ?></td>
                                    <td><?= $keterangan[$i] ?></td>
                                    <td><?= $grade ?></td>
                                    <td><?= $predikat ?></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                        <tfoot>
                            <?php
                            foreach ($tfoot as $footer => $tampil) {
                            ?>
                                <tr class="table-success">
                                    <th colspan="6"><?= $footer ?></th>
                                    <th><?= $tampil ?></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>