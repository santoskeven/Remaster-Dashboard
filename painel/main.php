<!DOCTYPE html>

    <?php 

        if(isset($_GET['logout'])){
            Painel::logout();
        }
    ?>

<html>

    <head>
        <title>Painel de controle(LOGADO)</title>
        <link href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    </head>

    <body>

        <section class="MainLeft">

            <div class="top_user">
                <img src="imgs/person.png">
                <p>Ronaldo keven santos</p>
                <span>ADMINISTRADOR</span>
            </div>

            <div class="navegacao">

                <div class="box_line">
                    <h2>CADASTRO</h2>
                    <span class="TitleLine"></span>
                </div>
                <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-depoimento">cadastrar Depoimento</a>
                <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-servico">cadastrar Serviço</a>
                <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-slide">cadastrar Slide</a>

                <div class="box_line">
                    <h2>GESTÃO</h2>
                    <span class="TitleLine"></span>
                </div>
                <a href="">Listar Depoimento</a>
                <a href="">Listar Serviço</a>
                <a href="">Listar slides</a>

                <div class="box_line">
                    <h2>ADM. DO PAINEL</h2>
                    <span class="TitleLine"></span>
                </div>
                <a href="">Editar usuário</a>

                <div class="box_line">
                    <h2>CONF. DO PAINEL</h2>
                    <span class="TitleLine"></span>
                </div>
                <a href="">Editar site</a>

            </div>

        </section>

        <section class="MainRight">

            <div class="headerR">
                <img src="imgs/menu.svg">

                <div class="atalhos">
                    <a href=""><img src="imgs/home.svg"></a>
                    <a href=""><img src="imgs/logout.svg"></a>
                </div>
            </div>

            <div class="content_main">

                <?php
                    Painel::CarregarPag();
                ?>

            </div>

        </section>

    </body>

</html>