<?php
    include('operaciones.php');
    session_start();
    $a=$_GET['a'];
    $a=$_GET['b'];
    $a=$_GET['c'];

    $_SESSION['op']=new operaciones($a, $b, $c);
    $_SESSION['a']=$a;
    $_SESSION['b']=$b;
    $_SESSION['c']=$c;

?>