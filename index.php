<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghifari</title>
</head>
<body>
    <?php
        printf("Tanggal %s<BR>" ,(date("d F Y")));
        $nama1 = readline();
        $nama = "Ghifari"; 
        $kelas = "XI RPL 2";
        printf("Nama saya adalah $nama <br> saya dari kelas $kelas");
    ?>
    <h4 style="font-family: 'Courier New', Courier, monospace;">nama saya adalah <?php echo $nama ?></h4>
</body>
</html>