<?php 


print_r($_COOKIE);

if(isset($_COOKIE['Login'])){
    $name = $_POST['name'];
    echo 'Welcome '.$name;
    setcookie('Login-cookie', $name, time()+ (60*60*24), '/');
}

