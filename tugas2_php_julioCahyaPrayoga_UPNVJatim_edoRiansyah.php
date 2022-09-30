<?php


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas1php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <div class="container px-5 my-5">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input class="form-control" id="nama" type="text" placeholder="Nama" data-sb-validations="required" name="nama" />
                                    <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="agama">Agama</label>
                                    <select class="form-select" id="agama" aria-label="Agama" name="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Jabatan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="manager" type="radio" name="jabatan" data-sb-validations="required" value="Manager" />
                                        <label class="form-check-label" for="manager">Manager</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="asisten" type="radio" name="jabatan" data-sb-validations="required" value="Asisten" />
                                        <label class="form-check-label" for="asisten">Asisten</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="kabag" type="radio" name="jabatan" data-sb-validations="required" value="Kabag" />
                                        <label class="form-check-label" for="kabag">Kabag</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="staff" type="radio" name="jabatan" data-sb-validations="required" value="Staff" />
                                        <label class="form-check-label" for="staff">Staff</label>
                                    </div>
                                    <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="menikah" type="radio" name="status" data-sb-validations="required" value="Menikah" />
                                        <label class="form-check-label" for="menikah">Menikah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="belumMenikah" type="radio" name="status" data-sb-validations="required" value="Belum Menikah" />
                                        <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                                    </div>
                                    <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
                                    <input class="form-control" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" name="jumlahanak" />
                                    <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="proses">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if (isset($_POST['nama']) || isset($_POST['jumlahanak']) || isset($_POST['jabatan']) || isset($_POST['status']) || isset($_POST['agama']) || isset($_POST['proses'])) {

                $name = $_POST['nama'];
                $anak = $_POST['jumlahanak'];
                $jabatan = $_POST['jabatan'];
                $status = $_POST['status'];
                $agama = $_POST['agama'];
                $tombol = $_POST['proses'];
                $gajiPokok = 0;

                error_reporting(E_ALL ^ E_WARNING || E_NOTICE);

                switch ($jabatan) {
                    case 'Manager':
                        $gajiPokok = 20000000;
                        break;
                    case 'Asisten':
                        $gajiPokok = 15000000;
                        break;
                    case 'Kabag':
                        $gjiPokok = 10000000;
                        break;
                    case 'Staff':
                        $gajiPokok = 4000000;
                        break;
                };

                $tunjanganJabatan = 0.20 * $gajiPokok;

                if ($status  == 'Menikah' && $anak <= 2) {
                    $tunjanganKeluarga = 0.05 * $gajiPokok;
                } else if ($status == 'Menikah' && $anak <= 5) {
                    $tunjanganKeluarga = 0.1 * $gajiPokok;
                } else if ($status == 'Menikah' && $anak > 5) {
                    $tunjanganKeluarga = 0.15 * $gajiPokok;
                } else {
                    $tunjanganKeluarga = 0;
                }
                $gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;
                $zakat = ($agama == 'Islam' && isset($gajiKotor)) ? (0.025 * $gajiKotor) : 0;
                $takeHomePay = $gajiKotor - $zakat; ?>

                <table class="table mt-2 table-striped">
                    <thead>
                        <tr class="table-primary">
                            <th colspan="2" class="align-centered">Data Pekerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Pegawai</td>
                            <td><?= $name ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td><?= $agama ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><?= $jabatan ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?= $status ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Anak</td>
                            <td><?= $anak ?></td>
                        </tr>
                        <tr>
                            <td>Gaji Pokok</td>
                            <td><?= number_format($gajiPokok, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Tunjangan Jabatan</td>
                            <td><?= number_format($tunjanganJabatan, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Tunjangan Keluarga</td>
                            <td><?= number_format($tunjanganKeluarga, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Gaji Kotor</td>
                            <td><?= number_format($gajiKotor, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Zakat Profesi</td>
                            <td><?= number_format($zakat, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Take Home Pay</td>
                            <td><?= number_format($takeHomePay, 2, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php }
            ?>
        </div>
    </div>
    <script lang="javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>