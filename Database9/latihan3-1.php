<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php //if( isset($_POST["submit"]) ) :?>
    <h1 HALLO POST <?= $_GET["nama"]; ?>></h1>
<?php //endif; ?>
    <form action="latihan3-1.php" method="GET">
        Masukkan Nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit"> KIRIM! </button>

    </form>
    
</body>
</html>