<?php
include '../auth/koneksi.php';

$query = mysqli_query($mysqli,"SELECT * from tb_mahasiswa");
//$result = mysqli_fetch_array($query);

?>
<center>
<h2>Data Mahasiswa</h2>
<a href="tambah-data.php" class="btn btn-sm btn-success" style="float:left;">Tambah Data</a>
<table class="table table-borderred table-responsive" width="100%">
    <thead class="bg-info">
        <tr>
            <th>No</th><th>Nama</th><th>Nim</th><th>Semester</th><th>Username</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=0;
        while ($result = mysqli_fetch_array($query)){
            $no++;
            ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $result['nama'];?></td>
            <td><?php echo $result['nim'];?></td>
            <td><?php echo $result['semester'];?></td>
            <td><?php echo $result['username'];?></td>
            <td>
                <a href="delet-data.php?id=<?php echo $result['id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                <a href="home.php?id=<?php echo $result['id'];?>&&page=edit" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
</center>