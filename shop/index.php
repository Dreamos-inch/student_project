<?php
//url localhost/shop

if (isset($_COOKIE['Login-cookie'])) {
    echo 'Shopping mister  ' . $_COOKIE['Login-cookie'];
} else {

    echo 'Please Log in';
    exit();
}
