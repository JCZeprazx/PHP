<?php
class Pegawai
{

    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    public $gajiPokok;


    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    public function setGajiPokok($jabatan)
    {
        switch ($jabatan) {
            case 'Manager':
                $gajiPokok = 15000000;
                break;
            case 'Asmen':
                $gajiPokok = 10000000;
                break;
            case 'Kabag':
                $gajiPokok = 7000000;
                break;
            case 'Staff':
                $gajiPokok = 4000000;
                break;
        }
        return $gajiPokok;
    }

    public function setTunjab()
    {
        return 0.2 * $this->setGajiPokok($this->jabatan);
    }

    public function setTunkel()
    {
        return ($this->status == 'Menikah') ? 0.1 * $this->setGajiPokok($this->jabatan) : 0;
    }

    public function zakatProfesi()
    {
        $gajiKotor = $this->setGajiPokok($this->jabatan) + $this->setTunkel() + $this->setTunkel();
        return ($this->agama == 'Muslim' && $gajiKotor > 6000000) ? (0.025 * $this->setGajiPokok($this->jabatan)) : 0;
    }

    public function gajiBersih()
    {
        return $this->setGajiPokok($this->jabatan) + $this->setTunkel() + $this->setTunkel() - $this->zakatProfesi();
    }

    public function printData()
    {
        echo '<table>';
        echo '<tbody>';
        echo '<tr>';
        echo '<td>NIP</td>';
        echo '<td>' . $this->nip, '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Nama</td>';
        echo '<td>' . $this->nama;
        echo '</tr>';
        echo '<tr>';
        echo '<td>Jabatan</td>';
        echo '<td>' . $this->jabatan, '<td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Agama</td>';
        echo '<td>' . $this->agama, '<td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Status</td>';
        echo '<td>' . $this->status, '<td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Gaji Pokok</td>';
        echo '<td>' . $this->setGajiPokok($this->jabatan), '<td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Tunjangan Jabatan</td>';
        echo '<td>' . $this->setTunjab(), '<td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Tunjangan Keluarga</td>';
        echo '<td>' . $this->setTunkel(), '<td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Zakat</td>';
        echo '<td>' . $this->zakatProfesi(), '<td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Gaji Bersih</td>';
        echo '<td>' . $this->gajiBersih(), '<td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '<br/>';
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas4 php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Data Pekerja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="table-primary">Data Pegawai 1</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>1101</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>Julio</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>Manager</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>Muslim</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Menikah</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="table-primary">Data Pegawai 2</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>1102</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>Rega</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>Asmen</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>Muslim</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Menikah</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="table-primary">Data Pegawai 3</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>1103</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>Agung</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>Kabag</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>Non Muslim</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Menikah</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="table-primary">Data Pegawai 4</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>1104</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>Ardhan</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>Staff</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>Muslim</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Belum Menikah</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="table-primary">Data Pegawai 5</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>1105</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>Novel</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>Staff</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>Non Muslim</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Menikah</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <?php
                    $julio = new Pegawai('1101', 'Julio', 'Manager', 'Muslim', 'Menikah');
                    $rega = new Pegawai('1102', 'Rega', 'Asmen', 'Muslim', 'Menikah');
                    $agung = new Pegawai('1103', 'Agung', 'Kabag', 'Non Muslim', 'Menikah');
                    $ardhan = new Pegawai('1104', 'Ardhan', 'Staff', 'Muslim', 'Belum Menikah');
                    $novel = new Pegawai('1105', 'Novel', 'Staff', 'Non Muslim', 'Menikah');
                    $julio->printData();
                    $rega->printData();
                    $agung->printData();
                    $ardhan->printData();
                    $novel->printData();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>