<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>BMI</title>
</head>
<body>

<div class="container">
<form role="form" class="form-horizontal form-group mt-2" method="POST" action="form_bmi.php">
    <div class="form-group row">
    <label for="tgl_periksa" class="col-4 col-form-label">Tanggal Periksa</label> 
    <div class="col-8">
      <input id="tgl_periksa" name="tgl_periksa" type="date" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control" placeholder="P004">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama anda">
    </div>
  </div>

  <div class="form-group row">
  <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <select id="gender" name="gender" class="custom-select">
        <option value="">Pilih Jenis Kelamin</option>        
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="number" class="form-control" placeholder="kg">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="number" class="form-control" placeholder="cm">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Submit</button>
      <button name="clear "type="reset" class="btn btn-success">Clear</button>
    </div>  
  </div>
</form>
</div>

</body>
</html>