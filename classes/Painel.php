<?php 

    Class Painel {

        public static $cargos = [
            '0' => 'Padrao',
            '1'=> 'Sub administrador',
            '2' => 'Administrador'
        ];

        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        public static function logout(){
            setcookie('lembrar', true, time()-1, '/');
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
            die();
        }

        public static function CarregarPag(){

            if(isset($_GET['url'])){
                $url = explode('/', $_GET['url']);
                $raiz = $_SERVER['DOCUMENT_ROOT'] . INCLUDE_PATH_URL;

                if(file_exists($raiz.'pages/'.$url[1].'.php')){
                                  }else{
                    header('Location:' .INCLUDE_PATH_PAINEL);
                }
            }else{
                $raiz = $_SERVER['DOCUMENT_ROOT'] . INCLUDE_PATH_URL;
                $url[1] = 'home';
                require_once($raiz.'pages/'.$url[1].'.php');

                // include('pages/home.php');
            }
    }
        
        public static function CarregarPag1(){

            // $url = explode('/', $_GET['url']);
            // // var_dump($url[1]);
            // if(file_exists('painel/pages/'.$url[1].'.php')){
            //     require('painel/pages/'.$url[1].'.php');
            // }else{
            //     header('Location:' .INCLUDE_PATH_PAINEL);
            // }
           

            // foreach ($url as $key => $value) {
            //     echo $value[0] . '<br>';
            // }

            
            // if(isset($_GET['url'])){

            //     $url = explode('/',$_GET['url']);
            //         if(file_exists('pages/'.$url[0].'.php')){
            //             //  include('pages/'.$url[0].'.php');
            //             // require('C:\xampp\htdocs\Keven\NovoDashboard\painel\pages\cadastrar-depoimento.php');
            //         }else{
            //            header('Location:' .INCLUDE_PATH_PAINEL);
            //         }
            // }
            // else{
            //     include('pages/home.php');
            //      // require('C:\xampp\htdocs\Keven\NovoDashboard\painel\pages\cadastrar-depoimento.php');
            // }



            // require('C:\xampp\htdocs\Keven\NovoDashboard\painel\pages\cadastrar-depoimento.php');
            // echo 'C:\xampp\htdocs\Keven\NovoDashboard\painel\pages\cadastrar-depoimento.php';
            //  echo '</br>';
            
            //     $url = explode('/',$_GET['url']);
            //     echo ($_SERVER['DOCUMENT_ROOT'].'/'. INCLUDE_PATH_PAINEL .'pages/'.$url[2].'.php');
                // echo $_SERVER['DOCUMENT_ROOT'].'/'. INCLUDE_PATH_PAINEL .'pages/'.$url[1].'.php';;
                // include($_SERVER['DOCUMENT_ROOT'].'/'. INCLUDE_PATH_PAINEL .'pages/'.$url[1].'.php');
                // var_dump($url);
                // echo '</br>';
                // var_dump($url[0]);
                // echo '</br>';
                // var_dump($url[1]);
                // echo '</br>';
                // echo $url[1];
                // echo '</br>';
                // echo 'pages/'.$url[1].'.php';
                // echo '</br>';
            //     if(file_exists('pages/'.$url[1].'.php')){
            //        echo 'existe';
            //    }else{
            //     echo 'Nexiste';
            //     header('Location:' .('pages/'.$url[1].'.php'));
            //    }
                    
        }
        

    }

    

?>