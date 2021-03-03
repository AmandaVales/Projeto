<!doctype html>
<html lang = "en">
    <head>
        <meta chaset = "uft-8">
        <title>Produtos</title>
    </head>
    <body>
        <?php

        $Produto[] = array();

        $Produto[] = array("Nome" => "Mesas" , "Preço Unitário" => 30 , "Quantidade" => "Valor");
        $Produto[] = array("Nome" => "Cadeiras" , "Preço Unitário" => 25  , "Quantidade" => "Valor");
        $Produto[] = array("Nome" => "Lustres" , "Preço Unitário" => 200 , "Valor");
        $Produto[] = array("Nome" => "Stands" , "Preço Unitário" => 150 , "Quantidade" => "Valor");
        $Produto[] = array("Nome" => "Luz de LED" , "Preço Unitário" => 180 , "Quantidade" => "Valor");

        print_r($Produto);

        ?>
    </body>
</html>
