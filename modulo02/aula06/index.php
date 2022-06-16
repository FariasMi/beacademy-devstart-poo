<?php

    ini_set('display_errors',1);

    include 'vendor/autoload.php';

    use Classes\config\Usuario;
    use Classes\Categoria;

    //$us1 = new classes\Usuario();
    // $us2 = new classes\config\Usuario();

    $us2 = new Usuario();

    $c1 = new Categoria();

    //var_dump($us1);
    var_dump($us2);

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    $html ='';

    for($n=0;$n<10;$n++){
        $html .= 'ó o pente <br>';
    }



    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('<h1>Ola mundo, estou aprendendo PHP</h1>'.$html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();