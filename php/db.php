<?php
$connect = mysqli_connect('localhost', 'root', '', 'vinland');
if(!$connect){
    die('could not connect to server'.mysqli_error);
}
?>