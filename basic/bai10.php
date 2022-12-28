<!DOCTYPE html>
<html>

<body>

    <?php

    $myfile = fopen("hoc_code.txt", "a") or die("unable to open file !");
    $text = "học ăn\n";
    fwrite($myfile, $text);
    $text = "học nói\n";
    fwrite($myfile, $text);
    fclose($myfile);


    ?>
</body>

</html>