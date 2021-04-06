<?php
$x = 5;
$y = 10;

function add(){
    $total = $GLOBALS['x'] + $GLOBALS['y'];
    echo $total;
}
  add();
?>