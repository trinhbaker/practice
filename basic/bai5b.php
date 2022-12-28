<!DOCTYPE html>
<html>

<body>

    <?php
    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbers(5, 4);

    function ham_so($tham_so=20){
        echo 'in ra đây là số: '.$tham_so;
    }
ham_so();
ham_so(30);


    ?>
</body>

</html>