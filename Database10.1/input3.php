<html>
<head>
    <title>Membuat Form Input Biodata PHP</title>
    <style>
        div {padding: 4px};
    </style>
</head>
<body>
        <form action="" method="POST">
            <div>
                <label>Nama :</label> <br>
                <input name="nama" type="text">
            </div>
            <div>
                <label>Jenis Kelamin :</label> <br>                
                <input name="jenis_kelamin" value="Laki_laki" type="radio">Laki-laki
                <input name="jenis_kelamin" value="Perempuan" type="radio">Perempuan
            </div>
            <div>
                <label>No Hp :</label> <br>
                <input name="no_hp" type="text">
            </div>
            <div>
                <label>Alamat :</label> <br>
                <input name="alamat" type="text">
            </div>
            <div>
                <input type="submit" value="Simpan">
            </div>
        </form>
</body>
</html>
<?php 
    //proses yang dapat terjadi
    //mengambil data dari parameter input halaman  biodata
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $alamat= $_POST['alamat'];
    //menampilkan data 
    echo "Nama = $nama"."<br>";
    echo "Jenis Kelamin = $jenis_kelamin" . "<br>";
    echo "No HP = $no_hp" . "<br>";
    echo "Alamat = $alamat";
    //disini ditulis proses lain yang dapat dilakukan seperti
    
    //insert ke database
    //update delete data
?>