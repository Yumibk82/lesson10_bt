
<?php
function taxiFee($km)
{
    if ($km < 0 || is_numeric($km) == False) {
        $e = new Exception("Please input period is number more than zero");
        return $e->getMessage();
    } else if ($km <= 1) {
        echo "Fee is :" . $km * 15000;
    } else if ($km <= 5) {
        echo "Fee is " . (1 * 15000 + ($km - 1) * 13500);
    } else if ($km <= 120) {
        echo "Fee is " . (1 * 15000 + (4 * 13500) + ($km - 5) * 11000);
    } else {
        echo "Fee is " . (1 * 15000 + (4 * 13500) + ($km - 5) * 11000) * 0.9;
    }
}
//    try {
//    taxiFee(-1);
//    } catch (Exception $e) {
//       echo "Message " . $e->getCode();
//    }
echo taxiFee(-1);
?>
