<?php
//define('family', 'reza');
//
//echo family;

function  test(){
    echo 'hi sajjad';
}
function invers($x){
    if($x==0){
    
        throw  new Exception(' do not invers');
    }
    return 1/$x;
}
function callfun(){
    
try{
    echo invers(0);
} catch (Exception $e){
    echo ' undefined';
} finally {
    echo '<hr>';
    echo ' Do not Invers Values';
}

}
echo call();
function call(){
    try {
        if(function_exists('test')){
            echo 'true';
        }
        
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }

}