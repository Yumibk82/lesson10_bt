<?php
try {
    $var_msg = "This is an exception example";
    throw new Exception($var_msg);
}
catch (Exception $e) {
    echo "Message: " . $e->getMessage();
    echo "<br>";
    echo "";
    echo "getCode(): " . $e->getCode();
    echo "<br>";
    echo "";
    echo "__toString(): " . $e->__toString();
}
?>

