<!DOCTYPE html>
<html>

<body>
    <?php
    //For
    for ($x = 1; $x < 11; $x++) {
        if ($x < 6) {
            echo "for từ 1 đến 5 " . $x;
        } else {
            echo "for từ 6 đến 10 " . $x;
        }
        echo "<br/>";
    }

    //while
    $y = 1;
    while ($y < 10) {
        if ($y == 4) {
            $y++;
            continue;
        }
        echo "số nhỏ hơn 10 lệnh while: $y <br/>";
        $y++;
    }
    //dowhile
    $z = 1;
    do {
        echo "Đếm từ 1 đến 10 bằng dowhile.$z <br/>";
        $z++;
    } while ($z < 11);

    //foreach- chi tiết ở 4b

    $hoc_ba=array('Toán'=> '10', 'Lý'=>'9', 'Hóa'=>'8');
    foreach($hoc_ba as $key => $value){
        echo $value;
        echo "<br>";
    }

    ?>
</body>

</html>