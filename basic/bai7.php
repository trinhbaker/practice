<!DOCTYPE html>
<html>

<body>
    <style>
        .error{ color: #FF0000;}
    </style>
    <?php
    $name = $address = $email = $website = $gender = $comment = "";
    $namerr = $addressrr = $emailrr = $websiterr = $genderrr = $commentrr = "";
    // // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = test_input($_POST["name"]);
    //     $address = test_input($_POST["address"]);
    //     $mail = test_input($_POST["mail"]);
    //     $gender = test_input($_POST["gender"]);
    //     $comment = test_input($_POST["comment"]);
    // }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $namerr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z' ]*$/", $name)) {
                $namerr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["address"])) {
            $addressrr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }

        if (empty($_POST["email"])) {
            $emailrr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailrr = "Invalid email format";
            }
        }
        if (empty($_POST["gender"])) {
            $genderrr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        if (empty($_POST["website"])) {
            $websiterr = "Website is required";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiterr = "Only letters and white space allowed";
            }
        }
        $comment = test_input($_POST["comment"]);
    }


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type=" text" name="name" value="<?php echo $name; ?>">
        <span class="error">*<?php echo $namerr; ?> </span>
        <br></br>
        Address: <input type="text" name="address" value="<?php echo $address; ?>"><br></br>
        Email: <input type="text" name="email" value="<?php echo $email ?>">
        <span class="error">*<?php echo $emailrr; ?></span><br></br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error">*<?php echo $websiterr; ?> </span><br></br>
        Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender == "Male") {
                                                        echo "checked";
                                                    } ?> value="Male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Female") {
                                                echo "checked";
                                            } ?> value="Female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Other") {
                                                echo "checked";
                                            } ?>value="Other">Other<br></br>
        Comment: <textarea name="comment" rows="5" cols="40" <?php echo $comment; ?>></textarea>
        <input type="submit" name="submit" value="submit">
    </form>
    <h2>
        KẾT QUẢ ĐÃ NHẬP:
    </h2>
    <?php

    echo $name;
    echo '<br>';
    echo $address;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $website;
    echo '<br>';
    echo $gender;
    echo '<br>';
    echo $comment;
    ?>





</body>

</html>