<!DOCTYPE html>
<html>

<body>

    <?php
    $a = 2;
    $b = 2;
    if ($a == $b) {
      echo "1";
    } elseif ($a > $b) {
      echo "2";
    } else {
      echo "3";
    }
    if ($a == $b) :

      echo "<h1>Tiêu đề 1 </h1>";

    endif;
    ?>

    <h1>Tiêu đề 2</h1>
</body>

</html>