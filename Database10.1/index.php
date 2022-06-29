<?php
require_once "functions.php";



// ambil data dari tabel mhs
$mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");

/* Cek result error
if( !$result){
    echo mysqli_error($conn);
}
*/
//ambl data dari tabel mhs 2
//mysqli_fetch_row()
//mysqli_fetch_assoc()
//mysqli_fetch_array()
//mysqli_fetch_object()


?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah data mahasiswa </a>
<a href="tambah2.php"> Tambah2 data mahasiswa </a>
<a href="input3.php"> Tambah3 data mahasiswa</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $a=1;?>
    <?php foreach( $mahasiswa as $row ): ?>
    <tr>
        <td><?= $a;?></td>
        <td>
            <a href="">Ubah</a>
            <a href="">Hapus</a>
        </td>
        <td> <img src=""> </td>
        <td> <?= $row["nrp"];?> </td>
        <td> <?= $row["nama"];?> </td>
        <td> <?= $row["email"];?> </td>
        <td> <?= $row["jurusan"];?> </td>
    </tr>
    <?php $a++; ?>
    <?php endforeach; ?>

</table>
</body>
</html>