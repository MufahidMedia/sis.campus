<?php
include '../auth/koneksi.php';
$id=$_GET['id'];
$query = mysqli_query($mysqli,"SELECT * from tb_mahasiswa WHERE id = '$id'");
$result = mysqli_fetch_array($query)
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h2>Form Edit Data</h2>
<form action="edit-data.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="nama" name="nama" value="<?php echo $result['nama'];?>" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">NIM</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Password" name="nim" value="<?php echo $result['nim'];?>" required>
    </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Semester</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Semester" name="semester" value="<?php echo $result['semester'];?>" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Username</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Username" name="username" value="<?php echo $result['username'];?>" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Password</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Password" name="password" value="<?php echo $result['password'];?>" required>
    </div>

  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>