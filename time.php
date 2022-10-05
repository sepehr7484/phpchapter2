<?php
$times=date('H');
echo date("H:i:s");
echo '<br>';
echo date("H");
echo '<br>';
echo date("i");
echo '<br>';
echo date("s");
echo '<br>';

if($times<19&&$times>15){
    echo 'Good afternon';
}
if($times>=19&&$times<4){
    echo 'Good afternon';
}

if($times<11&&$times>5){
    echo 'Good afternon';
}





?>
