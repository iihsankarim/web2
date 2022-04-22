<?php 
require_once "class_pasien.php";
require_once "class_bmi.php";
require_once "class_bmipasien.php";

$pasien1 = new Pasien();
$pasien1->kode = "P001";
$pasien1->nama = "Ahmad";
$pasien1->gender = "L";


$pasien2 = new Pasien();
$pasien2->kode = "P002";
$pasien2->nama = "Rina";
$pasien2->gender = "P";

$pasien3 = new Pasien();
$pasien3->kode = "P003";
$pasien3->nama = "Lutfi";
$pasien3->gender = "L";


$bmi1 = new BMI(69.8, 169);
$bmi1->nilaiBMI();
$bmi1->statusBMI();

$bmi2 = new BMI(55.3, 165);
$bmi2->nilaiBMI();
$bmi2->statusBMI();

$bmi3 = new BMI(45.2, 169);
$bmi3->nilaiBMI();
$bmi3->statusBMI();

$bmipasien1 = new BMIpasien("2022-01-10",$pasien1,$bmi1);
$bmipasien2 = new BMIpasien("2022-01-10",$pasien2,$bmi2);
$bmipasien3 = new BMIpasien("2022-01-01",$pasien3,$bmi3);

$ar_bmipasien = [$bmipasien1, $bmipasien2, $bmipasien3];



$pasien4 = new Pasien();
$pasien4->kode = $_POST['kode'];
$pasien4->nama = $_POST['nama'];
$pasien4->gender = $_POST['gender'];


$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$bmi4 = new BMI($berat,$tinggi);


$tgl_periksa = $_POST['tgl_periksa'];
$bmipasien4 = new BMIpasien($tgl_periksa,$pasien4,$bmi4);
array_push($ar_bmipasien,$bmipasien4);



?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .table-container{
                overflow: auto;
            }
        </style>
<div class="container mt-2">
<h3 class="text-center">Data BMI Pasien</h3>
<div class="table-container">
<table class="table table-striped" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Tanggal Periksa</th><th>Kode Pasien</th>
            <th>Nama Pasien</th> <th>Gender</th>
            <th>Berat (kg)</th><th>Tinggi (cm)</th><th>Nilai BMI</th>
            <th>StatusBMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor=1;
            foreach($ar_bmipasien as $obj){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obj->tgl_periksa?></td>
                <td><?=$obj->pasien->kode?></td>
                <td><?=$obj->pasien->nama?></td>
                <td><?=$obj->pasien->gender?></td>
                <td><?=$obj->bmi->berat?></td>
                <td><?=$obj->bmi->tinggi?></td>
                <td><?=$obj->bmi->nilaiBMI()?></td>
                <td><?=$obj->bmi->statusBMI()?></td>
            </tr>
        <?php
            $nomor++;
            }
        ?>
    </tbody>
</table>
</div>
</div>