<?php
// for($x=0; $x <= 20; $x++){
//     for($y=0;$y<$x;$y++){
//         echo "*";    
//     }
//     echo "<br>";
// // }
$n = $_POST["sodong"];
//Tam giac vuông đơn giản

//  $n=$_POST["sodong"];
// for($i=0; $i<=$n; $i++){
//     for ($j=$n; $j>$i;$j--){
//         echo "&nbsp;&nbsp;&nbsp";
//     }
//     for ($k=0; $k<$i;$k++){
//         echo "*&nbsp;&nbsp;&nbsp";
//     }
//     echo "<br>";
for($i=0;$i<=$n;$i++){
    echo "<br>";
    for($j=0;$j<=$n;$j++){
        echo "*";
    }
}

    




?>
