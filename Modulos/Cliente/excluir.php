<?php
    if(isset($_GET['id']) AND is_numeric($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE * FROM cliente where id_cliente = :id_cliente";

        $stmt = DB::Conexao()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    }else{
        echo "ID INVÁLIDO";
    }
?>
