
        <?php
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOK = 1;
        $imagefileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "file is an image" . $check["mime"] . ".";
                $uploadOK = 1;
            } else {
                echo "File is not image";
                $uploadOK = 0;
            }
        }
        //check file exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOK = 0;
        }
        //check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry your file is too large.";
            $uploadOK = 0;
        }
        //check file type
        if ($imagefileType != "jpg" && $imagefileType != "png" && $imagefileType != "jpeg" && $imagefileType != "gif") {
            echo "Sorry, only JPG, PNG, JPEG, GIF file are allowed.";
            $uploadOK= 0;
        }
        //check file uplaad
        if ($uploadOK == 0) {
            echo "Sorry, your file was not uploaded yet.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been uploaded";
            } else {
                echo "Sorry, there was an error uploading your file";
            }
        }
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"]," $target_file");

        ?>
