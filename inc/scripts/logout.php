<?php
/**
 * Created by PhpStorm.
 * User: 1404436
 * Date: 31/10/2016
 * Time: 14:44
 */
session_start();
if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
header("location:./");
?>