<?php

    require "controller/InicioController.php";

    $pagina = isset($_GET ["pagina"]) ? $_GET["pagina"] : "index";
    

    $iniciactrl = new InicioController();

    switch ($pagina) {
        case 'index':
            # code...
            $iniciactrl -> Index();
            break;

            case 'login':
                # code...
                $iniciactrl -> Login();
                break;

                case 'painel':
                    # code...
                    $iniciactrl -> Painel();
                    break;
        
        
    }


?>