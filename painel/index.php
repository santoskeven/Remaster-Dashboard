<?php 
    include('C:\xampp\htdocs\Keven\NovoDashboard\config.php');
    

    if(Painel::logado() == false){
        include('login.php');
    }else{
        include('main.php');
    }
?>