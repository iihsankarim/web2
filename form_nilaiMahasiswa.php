<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container">
<form class="form-horizontal" method="POST" action="praktikum4.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
        <option value="Sistem Operasi">Sistem Operasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="number" class="form-control" maxlength="100">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

<hr/>
<?php 
require_once "class_nilaiMahasiswa.php";


if(isset($_POST['submit'])){
  $submit = $_POST['submit'];
  $nim = $_POST['nim']; 
  $matkul = $_POST['matkul'];
  $nilai = $_POST['nilai'];

  $nilaiMhs = new nilaiMahasiswa ($nim,$matkul,$nilai);
  $nilaiMhs->nim;
  $nilaiMhs->matkul;
  $nilaiMhs->nilai;

    echo "<br/>";

    echo "NIM : ". $nim;
    echo "<br/>";

    echo "Mata Kuliah : ". $matkul;
    echo "<br/>";

    echo "Nilai : ". $nilai;
    echo "<br/>";

    echo "Hasil Ujian : ". $nilaiMhs->hasil();
    echo "<br/>";

    echo "Grade : ". $nilaiMhs->grade();

} else {
  echo "<h5>Masukan data form diatas<h5/>";
}
?>
</div>

