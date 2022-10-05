<?php
callcookie();
function callcookie(){
    $cookiename='username';
$cookie_value=$_POST['username'];
setcookie($cookiename, $cookie_value, time()+10);
echo time().'<hr>';

if(!isset($_COOKIE[$cookiename])){
    echo 'Cookied named:    '.$cookiename.'          is not set.';
} else {
    echo 'Cookie:    '.$cookiename.'            is set.';
    
    echo 'value is cookie:    '.$_COOKIE[$cookiename].'      is not set.';
}
}
//delete cookie later 100sc
//setcookie($cookiename, $cookie_value, time()-100); کوکي کورد نظر رو حذف ميکنه