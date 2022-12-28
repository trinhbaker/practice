<!DOCTYPE html>
<html>

<body>

    <?php

    if (isset($_COOKIE["user"]) && $_COOKIE["pass"]) {
        echo "tên đăng nhập của user là: " . $_COOKIE["user"];
        echo "<br>password là: " . $_COOKIE["pass"];
    }
    ?>
    <pre>
<a href="cookie.php">Trở về trang cookie</a>
<a href="deletecookie.php">delete cookie</a>
</pre>
</body>

</html>