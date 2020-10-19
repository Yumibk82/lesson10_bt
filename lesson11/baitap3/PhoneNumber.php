<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea style="background: #8E9CB2 border-box" name="input">
    </textarea>
    <br>
    <button type="submit">Classify</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $str = $_REQUEST['input'];
        $viettel = [];
        $mobi = [];
        $vina = [];
        $arr = explode(',', $str);
        for ($i = 0; $i < count($arr); $i++) {
            $test=substr($arr[$i],0,-7);
            if ($test=== "090") {
                array_push($mobi, $arr[$i]);
            } else if ($test === "091") {
                array_push($vina, $arr[$i]);

            } else {
                array_push($viettel, $arr[$i]);
            }
        }
    }
    echo "Viettel: ";
    for ($i=0;$i<count($viettel);$i++){
        echo $viettel[$i].';';
    }
    echo "<br>";
    echo "Mobi: ";
    for ($i=0;$i<count($mobi);$i++){
        echo $mobi[$i].';';
    }echo "<br>";
    echo "Mobi: ";
    for ($i=0;$i<count($vina);$i++){
        echo $vina[$i].';';
}
?>
</body>
</html>