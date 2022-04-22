<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Form Nilai Siswa</title>
</head>
<body>
<div class="container">
    <form class="form-horizontal" method="POST" action="praktikum3.php">
        <fieldset>
            <legend>Form Nilai Siswa</legend>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="text" name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
        </div>
    </div>
    <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
        <select id="select" name="matkul" class="custom-select">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BasisData_I">Basis Data I</option>
            <option value="Pemrograman_Web">Pemrograman Web</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="nilaiuts" name="nilaiuts" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="nilaiuas" name="nilaiuas" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
        <input id="nilaitugas" name="nilaitugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" class="btn btn-primary">
        </div>
    </div>
    </fieldset>
    </form>
<?php
if (isset($_POST['proses'])) {
    $proses = $_POST['proses'];
    $nama_lengkap = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilaiuts'];
    $nilai_uas = $_POST['nilaiuas'];
    $nilai_tugas = $_POST['nilaitugas'];


    echo 'Proses : '.$proses;
    echo '<br/>Nama Lengkap : '.$nama_lengkap;
    echo '<br/>Mata Kuliah : '.$matkul;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;



    // GRADE UTS
    $grade_uts = " ";
    if($nilai_uts >= 55){
        echo '<br/>Nilai UTS anda sudah Bagus!';
    }else{
        echo '<br/>Nilai UTS anda perlu diperbaiki!';
    }

    
    //GRADE UAS
    $grade_uas = " ";
    if($nilai_uas >= 55){
        echo '<br/>Nilai UAS anda sudah Bagus!';
    }else{
        echo '<br/>Nilai UAS anda perlu diperbaiki!';
    }

    // GRADE TUGAS/PRAKTIKUM
    $grade_tugas = " ";
    if($nilai_tugas >= 55){
        echo '<br/>Nilai Tugas Praktikum anda sudah Bagus!';
    }else{
        echo '<br/>Nilai Tugas Praktikum anda perlu diperbaiki!';
    }

    // NILAI TOTAL
    $persentase_uts = (30 * $nilai_uts)/100;
    $persentase_uas = (35 * $nilai_uas)/100;
    $persentase_tugas = (35 * $nilai_tugas)/100;

    $nilai_total = $persentase_uts + $persentase_uas + $persentase_tugas;

    echo '<br/>Nilai Total : '.$nilai_total;
    require_once 'libfungsi.php';
    $hasil_ujian = kelulusan($nilai_total);
    echo '<br/>DINYATAKAN ' . $hasil_ujian;
}else{
    echo "Form belum disubmit";
}
?>
</div>
</body>
</html>