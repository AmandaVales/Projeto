<!doctype html>
<html lang="en">
    <head>
        <title>Cliente</title>
        <meta charset = "utf-8">

    </head>
    <body>
        <?php
        $Cliente [] = array();

        $Cliente[] = array("nome" => "João Antonio", "CPF" => 45269831751, "Endereço" => "Avenida ... , numero da casa", "Cidade" => "Laranjal do Jari_AP", "Contato" => 096991004041);
        $Cliente[] = array("nome" => "Fábio Silva", "CPF" => 00163648752, "Endereço" => "Avenida ... , numero da casa", "Cidade" => "Santana_AP", "Contato" => 096991589631);
        $Cliente[] = array("nome" => "Carla Reis ", "CPF" => 65412398701, "Endereço" => "Avenida ... , numero da casa", "Cidade" => "Oiapoque_AP", "Contato" => 096991445289);        $Cliente[] = array("nome" => "Alice Maria", "CPF" => 82917364500, "Endereço" => "Avenida ... , numero da casa", "Cidade" => "Calçoene_AP", "Contato" => 096991114728);
        $Cliente[] = array("nome" => "Ana Maria", "CPF" => 02543617899, "Endereço" => "Avenida ... , numero da casa", "Cidade" => "Macapá_AP", "Contato" => 096991452396);
        
        print_r ($Cliente);
        

        ?>
    </body>
</html>
