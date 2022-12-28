<!DOCTYPE html>
<html>

<body>

  <?php
  echo 'phpversion: ' . phpversion();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $t = date("H");
  echo $t;
  echo "<br/>";
  echo date_default_timezone_get();

  // echo ini_get('date.timezone');
  // echo "<p>The hour (of the server) is " . $t;
  // echo ", and will give the following message:</p>";
  // switch ($t) {
  //   case  "10":
  //     echo "Have a good morning!";
  //     break;
  //   case "20":
  //     echo "Have a good day!";
  //     break;
  //   default:
  //     echo "Have a good night!";
  // }
  // echo '<br/>';
  // $a = 2;
  // $b = 2;
  // if ($a == $b) {
  //   echo "1";
  // } elseif ($a > $b) {
  //   echo "2";
  // } else {
  //   echo "3";
  // }
  // if ($a == $b) :

  //   echo "<h1>Tiêu đề 1 </h1>";

  // endif;
  // $bien_0 = "0";
  // $bien_rong;
  // $bien_false= false;
  // $bien_null = null;
  // var_dump(isset($bien_null));
  // var_dump(empty($bien_0));

  ?>

  <h1>Tiêu đề 2</h1>
</body>

</html>