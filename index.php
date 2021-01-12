<?php
    
include_once "./include/header.php";

    if (isset($_GET['pg'])) {
        $paginas = $_GET['pg'];

        switch ($paginas) {

            case 'inicial':
                include "./paginas/inicial.php";
                break;
            case 'bootstrap':
                include "./paginas/bootstrap.php" ;
                break;
            case 'github':
                include "";
                break;

            default:
                echo "pagina não Definida";
                break;
        }

    } else {
        include "paginas/inicial.php";
    }

    // Footer
include_once "paginas/include/footer.php";