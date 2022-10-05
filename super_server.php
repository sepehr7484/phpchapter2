<?php

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
echo $_SERVER['SERVER_ADMIN'].'<br>';
echo $_SERVER['REQUEST_URI'].'<br>';
echo $_SERVER['MYSQL_HOME'].'<br>';
echo $_SERVER['DOCUMENT_ROOT'].'<br>';
//require './showServer.php';