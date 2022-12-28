<!DOCTYPE html>
<html>

<body>
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "Hôm nay là ngày: ".date("Y/m/d")."<br>";
echo " Bây giờ là: ".date("h:m");

echo "<br>";
$d = strtotime("tomorrow");
echo date("Y/m/d",$d);
    ?>
</body>

</html>