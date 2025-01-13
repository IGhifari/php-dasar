<?php
    @$nilai = $_POST["nilai"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <form method="post">
        <h5>Input Nilai di bawah ini</h5>
            <input type="text" name="nilai"> <br>
            <input type="submit" value="Ok"> <br>
            <?php
                if($nilai >= 86 && $nilai <=100 || $nilai == "A" || $nilai == "a"){
                    echo "Sempurna <br>";
                    echo "Grade A";
                }elseif($nilai >=76 && $nilai <= 85 || $nilai == "B" || $nilai == "b"){
                    echo  "Baik <br>";
                    echo "Grade B";
                }elseif($nilai >= 66 && $nilai <= 75 || $nilai == "C" || $nilai == "c"){
                    echo "Cukup <br>";
                    echo "Grade C";
                }elseif($nilai >= 56 && $nilai <= 65 || $nilai == "D" || $nilai == "d"){
                    echo "Kurang <br>";
                    echo "Grade D";
                }elseif($nilai <= 55 && $nilai >= 0 || $nilai == "E" || $nilai == "e"){
                    echo "Mengulang <br>";
                    echo "Grade E";
                }else{
                    echo "Salah input nilai";
                    
                }
            ?>
        </form>
</body>
</html>