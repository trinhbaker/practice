<!DOCTYPE html>
<html>

<body>
    <?php
    //foreach
    $arr = array(10, 11, 12, 13);
    // var_dump($arr);
    // echo "<br>";
    foreach ($arr as $key => $value) {
        // echo $key . ':' . $value;
        // echo "<br>";
    }

    $hoc_ba = array('Toán' => '10', 'Lý' => '9', 'Hóa' => '8');
    // var_dump($hoc_ba);
    foreach ($hoc_ba as $key => $value) {
        // echo $key . ':' . $value;
        // echo "<br>";
    }
    array_push($hoc_ba, 10);
    // var_dump('dong 22', $hoc_ba);
    // echo '<br>';
    //thêm mảng, ghép mảng
    // array_push($hoc_ba,'Anh' => '8');
    $hoc_ba['Anh'] = 8;
    // echo '<pre>';
    // var_dump($hoc_ba);
    // echo '</pre>';
    $array_push = array(20, 21, 22);
    // var_dump($array_push);
    // echo '<br/>';
    array_push($array_push, 23);
    // var_dump($array_push);

    // $combile = array_merge($hoc_ba,$array_push);
    // echo '<pre>';
    // var_dump($combile);
    // echo '</pre>';
    // array_push($combile, 24);
    //     echo '<pre>';
    //     var_dump($combile);
    //     echo '</pre>';

    $check = array('Anh' => 8);
    array_push($hoc_ba, $check);
    echo "<pre>";
    var_dump($hoc_ba);
    echo "<br>";
    // echo 'dong thu 46';
    // echo '<br>';
    // if(array_key_exists('Anh',$hoc_ba)){
    //     echo 'Anh:'.$value;
    // }
    echo 'dong 51';

    if ($hoc_ba['Anh'] === 8) {
        echo 'Day roi: ' . $hoc_ba['Anh'];
    }

    if (in_array($check, $hoc_ba)) {
        echo "dong 52";
        echo "<br>";
        var_dump($check);
    }

    echo 'dong thư 67<br/>';
    $bien_slice = array_slice($hoc_ba,1);
    print_r($bien_slice);
    ?>
</body>

</html>