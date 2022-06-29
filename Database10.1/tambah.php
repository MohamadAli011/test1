<?php 
    //proses yang dapat terjadi
    //mengambil data dari parameter input halaman  biodata
    
    #$jenis_kelamin = $_POST['jenis_kelamin'];
    #$no_hp = $_POST['no_hp'];
    #$alamat= $_POST['alamat'];
    //menampilkan data 
   
    #echo "Jenis Kelamin = $jenis_kelamin" . "<br>";
    #echo "No HP = $no_hp" . "<br>";
    #echo "Alamat = $alamat";
    //disini ditulis proses lain yang dapat dilakukan seperti
    
    //insert ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    if (isset($_POST['submit'])) {
        echo "DATA BERHASIL";
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];
    //Query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES ('','$nrp','$nama','$email',
                    '$jurusan')";
        mysqli_query($conn, $query);            
    }
    //update delete data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <form action="" method="POST">
        <div>
            <label>NRP : </label>
            <input name="nrp" type="text">
        </div>
        <div>
            <label>Nama : </label>
            <input name="nama" type="text">
        </div>
        <div>
            <label>E-Mail : </label>
            <input name="email" type="text">
        </div>
        <div>
            <label>Jurusan : </label>
            <input name="jurusan" type="text">
        </div>
        <div>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>
</html>