<?php
    print("1.Laki - Laki \n2.Perempuan"); 
    printf("Jenis Kelamin anda : ");
    $jk = readline();
    if($jk == 1){
        echo "Gender kamu adalah laki - laki ";
    }elseif($jk == 2){
        echo "Gender kamu adalah perempuan";
    }else{
        echo "Pilih yang benar";
    }
?>