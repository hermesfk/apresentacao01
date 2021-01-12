<?php
    
include_once "./include/header.php";

    if (isset($_GET['pg'])) {
        $paginas = $_GET['pg'];

        switch ($paginas) {

            case 'inicial':
                include "paginas/inicial.php";
                break;
            case 'textos':
                include "paginas/textos.php";
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