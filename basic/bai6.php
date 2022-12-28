<!DOCTYPE html>
<html>

<body>

    <?php
$ket_qua = array(
    array('Nga', 10, 8),
    array('Bình', 8, 9),
    array('Quân',7, 6)
);
for ($x=0; $x< 3; $x++ ) {
    echo '<p><b>Kết quả '.$x.'</b></p>';
        echo '<ul>';
        for ($y=0; $y < 3; $y++) {
            echo '<li>';
            echo $ket_qua[$x][$y];
            echo '</li>';
        }
        echo '</ul>';

}

    ?>
</body>

</html>