<!doctype html>

<html>
    <head>
        <title>Projeto</title>        
    </head>

    <body>
        <header>TOPO</header>
        <div id="content">
        <nav>
        <a href= "?modulo=dashboard$acao=ver"> DASHBOARD</a>
        <a href= "?modulo=estruturas$acao=listar"> ESTRUTURAS LISTAR</a>
        <a href= "?modulo=estruturas$acao=adicionar"> ESTRUTURAS ADICIONAR</a>
        <a href= "?modulo=cliente$acao=listar"> CLIENTE LISTAR</a>
        <a href= "?modulo=cliented$acao=adicionar"> CLIENTE ADICIONAR</a>
        <a href= "?modulo=equipamentos$acao=listar"> ESTRUTURAS LISTAR</a>
        <a href= "?modulo=equipamentos$acao=listar"> EQUIPAMENTOS LISTAR</a>
        <a href= "?modulo=equipamentos$acao=adicionar"> EQUIPAMENTOS ADICIONAR</a>
        <a href= "?modulo=eventos$acao=listar"> EVENTOS LISTAR</a>
        <a href= "?modulo=eventos$acao=adicionar"> EVENTOS ADICIONAR</a>
        <a href= "?modulo=calendario$acao=listar"> CALENDARIO LISTAR</a>
        <a href= "?modulo=calendario$acao=adicionar"> CALENDARIO ADICIONAR</a>
        </nav> 

        <?php
        if(isset($_GET['modulos'])){ $modulo= $_GET['modulo'];}else{ $modulo = "dashboard";}
        if(isset($_GET['acao'])){ $acao = $_GET['acao'];}else{ $acao = "ver";}
        
        include("modulos/".$modulo."/".$acao.".php");
        ?> 

        </div>
        <footer>
            Rodapé do site
        </footer>
        </div>
    </body>
</hmtl>
