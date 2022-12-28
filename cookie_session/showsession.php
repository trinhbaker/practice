<?php
session_start();

?>


<!DOCTYPE html>
<html>

<body>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <?php
    $use_name = $password = "";
    $user_namerr = $passwordrr =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user_name"])) {
            $user_namerr = "User name is required";
        } else {
            $user_name = test_input($_POST["user_name"]);
            if (!preg_match("/^[a-zA-Z' ]*$/", $user_name)) {
                $user_namerr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["password"])) {
            $passwordrr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        return $data;
    }
    ?>

    <?php
    if (isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
        echo "Tên đăng nhập là: " . $_SESSION["user"] . "<br>";
        echo "Password là: " . $_SESSION["pass"];
    }
    ?>
    <a href="session.php">Trở về trang session</a><br/>
    <a href="deletesession.php">hủy session</a>
</body>

</html>