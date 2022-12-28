<?php
setcookie("user", $_POST["user"],time()-300);
setcookie("pass", $_POST["pass"], time() - 300);
header("location: cookie.php");

?>