<?php

////$name=$_GET['name'];
////echo $name;
//$n='reza';
//echo '<pre>';
////print_r($_GET);
//echo '</pre>';
//echo '<h3>';
//
//echo $n;
//echo '</h3>';
//
//part1();
echo '<hr>';

$name= part2('name');
echo '<h3>';

echo $name;
  echo '</h3>';



function part1(){
    if(isset($_GET['name'])&&isset($_GET['color'])){
  $name=$_GET['name'];
  $color=$_GET['color'];
}else{
    $name='No name';
    $color='red';
}

echo '<h3 style="color:'.$color.' ">';
echo 'Hi ::'.$name;
echo '</h3>';

}


function part2($param,$deful=null){
    if (isset($_GET[$param])) {
        $value=$_GET[$param];
        
    }else{
        $value=$deful;
    }
    
    
}