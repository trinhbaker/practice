<!DOCTYPE html>

<body>
    <?php
    // $y = 1;
    // function ham($x)
    // {
    //     echo $x;
    // }
    // ham($y);
$so = 1;
    // $arr_func = [
    //     'func_1' => function ($tham_so) {
    //         echo 'hàm số '.$tham_so;
    //     },
    //     'func_2' => function ($tham_so) {
    //         $tham_so++;
    //         echo 'hàm số '.$tham_so;
    //     },
    //     'func_3' => function (&$tham_so) {
    //         $tham_so++;
    //         echo 'ham số '.$tham_so + 1;
    //     }
    // ];
    // foreach ($arr_func as $key => $value) {
    //     echo  $value($so). '=>'.$key;
    //     echo'<br/>';
    $mang = [2,4,6,8];
    
    array_walk($mang, function($value, $key){
    echo '<pre>';
        echo 'Hàm số thử '.$key.'có giá trị là '.$value;
        echo '<pre/>';
    ;
}
    
);






    //  $arr_func['func_1']();
    // echo '<br/>';
    // $arr_func['func_2']($so);
    // echo '<br/>';
    // $arr_func['func_3']($so);
    // echo '<br/>';
    // echo $so;

    ?>
</body>

</html>