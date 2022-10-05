<?php


$sessionname='username';
$sessionvalue='sajjad';
$getitem=$_POST['items'];
switch ($getitem) {
    case '0':

createsession($sessionname, $sessionvalue);
        break;
   case '1':

       deletesession($sessionname, $sessionvalue);
        break;
    
    
    
    default:
        break;
}

//deletesession($sessionname, $sessionvalue);

function createsession($name,$value){
    session_start();
if(isset($_SESSION[$name])){
    echo 'Success'.'<br>';
    echo $name.'<br>';
    echo '<h1>'.$_SESSION[$name].'</h1>';
} else {
    $_SESSION[$name]=$value;
    echo 'session started.';
}
    
    
}
function deletesession($name,$value){
    session_start();
    
session_unset();//select delte session
session_destroy();//all delete session
if(isset($_SESSION[$name])){
    echo 'Success'.'<br>';
    echo $name.'<br>';
    echo '<h1>'.$_SESSION[$name].'</h1>';
} else {
   $_SESSION[$name]=$value;
    echo 'session Destory.';
}
}