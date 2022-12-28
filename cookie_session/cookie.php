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

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        User name: <input type=" text" name="user" >
        <span class="error">*<?php echo $user_namerr; ?> </span>
        <br></br>
        Password: <input type="password" name="pass"><br></br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php
    if(isset($_POST["login"])){
        setcookie("user",$_POST["user"], time()+300);
        setcookie("pass", $_POST["pass"], time()+300);
        header("location: showcookie.php");

    }
    ?>

</body>

</html>