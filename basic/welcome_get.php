<!DOCTYPE html>
<html>

<body>
  <?php $name = $email = $gender =$comment = $website = "";
  if ($_SERVER["Request_method"]== 'Post'){
$name= test_input($_POST["name"]);
$email= test_input($_POST["email"]);
  }
?>
</body>

</html>