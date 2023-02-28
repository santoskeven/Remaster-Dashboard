    <section class="container_apres">
        <div class="person_infos">
            <span><?php echo $infosite['subT_apres']?></span>

            <h2><?php echo $infosite['autor_apres']?></h2>

            <p><?php echo $infosite['apres_desc2']?></p>

            <p><?php echo $infosite['apres_desc2']?></p>
        </div>

        <div class="person_img">
            <img src="<?php echo INCLUDE_PATH ?>imgs/person.png">
        </div>
    </section>

    <section class="container_espc g2">
        <div class="topo">
            <span class="Clines line_espc"></span>
            <h2 class="g10C">especialidades</h2>
        </div>

        <div class="row_espc">

            <?php 
                foreach($espc_site as $key => $value){
            ?>

                <div class="g1 single_espc">
                    <img src="<?php echo INCLUDE_PATH ?>imgs/<?php echo $value['icone_box']?>.svg">
                    <div class="top_single">
                        <span class="BoxLine single_linha"></span>
                        <p class="g1"><?php echo $value['titulo_box']?></p>
                    </div>
                    <p><?php echo $value['desc_box']?></p>
                </div>

            <?php }?>

        </div>
        
    </section>

    <section class="container_serv g2">
        <div class="serv_topo">
            <spa class="Clines line_serv"></spa>
            <h2 class="g10C">serviços</h2>
            <p class="g10C">LOREM IPSUM DOLOR SIT AMET, CONSECETUR ADIPISCING ELIT.</p>
        </div>

        <div class="content_serv">
            
            <?php 
            
                foreach($serv_site as $key => $value){
                    
            ?>

                <div class="g1 box_serv">
                    <span class="Clines deco"></span>
                    <h4 class="g10C"><?php echo $value['titulo_box']?></h4>
                    <h3><?php echo $value['subTitulo_box']?></h3>
                    <p class="g10C"><?php echo $value['desc_box']?></p>
                </div>

            <?php }?>

        </div>
        
    </section>

    <section class="container_coment g2">
        <div class="coment_top">
            <span class="Clines line_coment"></span>
            <h2 class="g10C">comentários</h2>
        </div>

        <div class="content_coment">

            <div class="rowt">

                <?php 
                    foreach($coment_site as $key => $value){
                ?>

                    <div class="box_coment">
                        <img src="<?php echo INCLUDE_PATH ?>imgs/<?php echo $value['img_user']?>.png">
                        <h2 class="g10C"><?php echo $value['nome_user']?></h2>
                        <p class="g7C"><?php echo $value['coment_user']?></p>
                        <span class="g7C"><?php echo $value['data_user']?></span>
                    </div>

                <?php }?>

            </div>
                        
     </div>

    </section>

    <section class="g1 container_contato">
        <div class="text">
            <h3 class="g10C">mãos á obra!!! </h3>
            <h2>entre em contato.</h2>
        </div>

        <div class="box_cont">

            <div class="g3 row">
                <div class="cont_left">
                    <div class="g5 socials_box">
                        <h2>REDES DE CONTATO</h2>
                        <p>acompanhe meu trabalho ou entre em contato peles minhas redes.</p>

                        <a href="#"><img src="imgs/instagram.svg">Instagram</a>
                        <a href="#"><img src="imgs/linkedin.svg">Linkedin</a>
                        <a href="#"><img src="imgs/github.svg">GitHub</a>
                    </div>
                </div>

                <div class="cont_right">
                    <form class="form">
                        <label for="email">EMAIL</label>
                        <input class="g4 input" type="text" name="email" id="email">

                        <label for="telefone">TELEFONE</label>
                        <input class="g4 input" type="text" name="telefone" id="telefone">

                        <label for="mensagem">MENSAGEM</label>
                        <textarea class="g4 input" type="text" name="mensagem" id="mensagem"></textarea>

                        <input type="submit" value="ENVIAR">
                    </form>
                </div>

            </div>

        </div>
    </section>