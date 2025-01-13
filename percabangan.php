<?php
@$jk = $_POST["jk"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>
<body>
        <form method="post">
            <input type="text" name="jk" > <br>
            <input type="submit" value="kirim"> <br>
            <?php
                if($jk == "P" || $jk == "p"){
                    echo "gender perempuan";
                }elseif($jk == "L" || $jk == "l"){
                    echo "gender laki-laki";
                }else{
                    echo "salah input ";
                }
            ?>
        </form>
</body>
</html>

