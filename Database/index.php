<?php

//koneksi ke msql
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mhs
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Cek result error
if( !$result){
    echo mysqli_error($conn);
}

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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
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
    <?php endwhile; ?>

</table>
</body>
</html>