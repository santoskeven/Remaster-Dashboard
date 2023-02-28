<?php require_once('config.php'); ?>

<?php 
    $infosite = Mysql::conectar()->prepare('SELECT * FROM `tb_site_config`');
    $infosite->execute();
    $infosite = $infosite->fetch();
?>

<?php 
    $espc_site = Mysql::conectar()->prepare('SELECT * FROM `tb_site_especialidades`');
    $espc_site->execute();
    $espc_site = $espc_site->fetchAll();
?>

<?php 
    $serv_site = Mysql::conectar()->prepare('SELECT * FROM `tb_site_servicos`');
    $serv_site->execute();
    $serv_site = $serv_site->fetchAll();
?>

<?php 
    $coment_site = Mysql::conectar()->prepare('SELECT * FROM `tb_site_comentarios`');
    $coment_site->execute();
    $coment_site = $coment_site->fetchAll();
?>


<!DOCTYPE html>

<html>

<head>
    <title>DashBoard</title>
    <link href="<?php echo INCLUDE_PATH ?>css/slick.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH ?>css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">   

</head>

<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    ?>

    <section class="container_header">

        <img src="<?php echo INCLUDE_PATH ?>imgs/slide3.jpg">

        <header>
            <span class="logo">Logo</span>

            <nav>
                <ul class="menu">
                    <li><a href="home">Home</a></li>
                    <li><a href="Servicos">Serviços</a></li>
                    <li><a href="Contato">Contato</a></li>
                    <li><a href="<?php echo INCLUDE_PATH_PAINEL ?>"><img src="<?php echo INCLUDE_PATH ?>imgs/login.svg"></a></li>
                </ul>
            </nav>
        </header>

        <div class="intro_header">
            <h2><?php echo $infosite['intro_titulo']?></h2>

            <p><?php echo $infosite['intro_desc1']?></p>
            <p><?php echo $infosite['intro_desc2']?></p>

            <button>DOLOR AMET</button>
        </div>

    </section>

    <?php  

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'Sobre' && $url != 'Servicos'){
                $pagina404 = true; 
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }

    ?>
   
    <footer class="g1">
        <div class="f_logo">
            <p>LOGO</p>

            <span>alguns diretios reservdos</span>
        </div>
        <div class="f_contato">
            <h2>contato</h2>
            <a href="#"><img src="<?php echo INCLUDE_PATH ?>imgs/instagram.svg">Instagram</a>
            <a href="#"><img src="<?php echo INCLUDE_PATH ?>imgs/linkedin.svg">Linkedin</a>
            <a href="#"><img src="imgs/github.svg">GitHub</a>
        </div>
        <div class="f_servicos">
            <h2>serviços</h2>
            <a href="#">Instagram</a>
            <a href="#">Linkedin</a>
            <a href="#">GitHub</a>
        </div>
    </footer>


    <script src="<?php echo INCLUDE_PATH ?>scripts/slick/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>scripts/slick/slick.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>scripts/slide.js"></script>
  
</body>

</html>