<?php
$_GET;
#var_dump($_GET);

$mahasiswa = [
    [
        "Nrp"=>"1234",
        "Nama"=>"Andro",
        "Email"=>"la@lo.co",
        "Jurusan"=>"Teknik"
    ],
    [
        "Nrp"=>"1235",
        "Nama"=>"Andri",
        "Email"=>"la@ldsfo.co",
        "Jurusan"=>"Tehjkknik"
    ]];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get</title>
    </head>
    <body>
        <h1>Daftar Mhs</h1>
            <ul>
            <?php foreach ($mahasiswa as $mhs ) : ?>
                <li> NRP
                    <a href="latihan2.php?
                    Nrp=<?=$mhs["Nrp"]; ?>&
                    Nama=<?=$mhs["Nama"]; ?>&
                    Email=<?=$mhs["Email"]; ?>&
                    Jurusan=<?=$mhs["Jurusan"]; ?>">
                    <?= $mhs["Nrp"]; ?>
                    </a>
                </li>
            </ul>
        <?php endforeach; ?>
    </body>
    </html>