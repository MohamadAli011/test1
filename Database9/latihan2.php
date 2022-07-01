<?php 
//cek apakah ada data
if (!isset($_GET["Nrp"]) ||
    !isset($_GET["Nama"]) ||
    !isset($_GET["Email"]) ||
    !isset($_GET["Jurusan"])) {
// redicect
    header("Location: test1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1>Detail Mahasiwa</h1>
    <ul>
        <li><?= $_GET["Nrp"]; ?></li>
        <li><?= $_GET["Nama"]; ?></li>
        <li><?= $_GET["Email"]; ?></li>
        <li><?= $_GET["Jurusan"]; ?></li>
    </ul>
    
</body>
</html>