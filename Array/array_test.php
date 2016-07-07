<?php
$array = array('5', '3', '2', '10', '34', '325', '2356', '3', '353', '2553', '3236923', '1');
print 'start array:<br>';
print_r($array);
$run = true;
while($run) {
    $run = false;
    for($i = 0; $i < count($array) - 1; $i++){
        if ($array[$i] > $array[$i + 1]) {
            $nextValue = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $nextValue;
            $run = true;
        }
    }
}
print '</br>sort array:</br>';
print_r($array);