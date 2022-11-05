<?php
    session_start();
    $bgColor = '';
// si no tiene color de
    if( $this->color != '' ) {
        $bgColor = $this->color; 
    } 

// crea el html con el color que reciba
    $strHTML = '<!DOCTYPE html>
                <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>HOME</title>
                    </head>
                    <body style="background-color: ' . $bgColor . ';">
                        <h2>Home Colores</h2>       
                    </body>
                </html>';

    echo $strHTML;

?>