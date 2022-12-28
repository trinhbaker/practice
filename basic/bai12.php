<?php
$cookie_name = "User";
$cookie_value = "Trinh";
setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
?>
<html>

<body>
    <?php
    if (!isset($_COOKIE["$cookie_name"])) {
        echo "cookie name '" . $cookie_name . "' is not set";
    } else {
        echo "cookie '" . $cookie_name . "' is set <br/>";
        echo "value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>