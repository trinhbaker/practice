<?php
function divide($deviden, $devidor){
    if ($devidor == 0){
        throw new Exception("Devision by zero");
    } else {
        return $deviden/$devidor;
    }  
    }
try {
    divide(5,0);
}
catch(Exception $e){
    $file=$e->getFile();
    $code=$e->getCode();
    $message=$e->getMessage();
    $line =$e->getLine();
    echo "Exception throw in  $file on line $line :[Code $code]: $message.";
}

?>