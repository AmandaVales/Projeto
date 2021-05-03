<?php include('config/DB.php');?>

<?php
if(isset($_POST["botao"])&& $_POST["botao"] == "Salvar"){
    $id = $_POST['id_calendario'];
    $qualserviço = $_POST['qual serviço?'];
    $maisdetalhes = $_POST['mais detalhes'];
    $datadesejada = $_POST['data desejada'];
    $quantidade = $_POST['quantidade'];
    
    $sql = "UPDATE calendario SET 
    qual serviço? = :qual serviço?,
    mais detalhes = :mais detalhes,
    data desejada = :data desejada,
    quantidade = :quantidade

    WHERE id_calendario = :id_calendario";

    $stmt = DB::conexao()->prepare($sql);
    $stmt->bindParam(':id_calendario', $id);
    $stmt->bindParam(':qual serviço?', $qualserviço);
    $stmt->bindParam(':mais detalhes', $maisdetalhes);
    $stmt->bindParam(':data desejada', $datadesejada);
    $stmt->bindParam(':quantidade', $quantidade);
    $stmt->execute();
}
?>   

<?php

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM calendario where id_calendario = :id_calendario";

    $stmt = DB::Conexao()->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $calendario = $stmt->Fetchall(PDO::FETCH_ASSOC);

?>

    <form method="POST" action="">
    Qual serviço?: 
    <input type="text" name="qual serviço?" value="<?php echo $calendario[0]('qual serviço?')?>"/><br />
    Mais detalhes: 
    <input type="text" name="mais detalhes" value="<?php echo $calendario[0]('mais detalhes')?>"/><br />
    Data desejada:
    <input type="text" name="data desejada" value="<?php echo $calendario[0]['data desejada'];?>"/><br />
    Quantidade:
    <input type="text" name="quantidade" value="<?php echo $calendario[0]['quantidade'];?>"/><br />


    <input type='hidden' name="id_calendario"
    value="<?php echo $cliente[0]['id_calendario'];?>"/><br />

    <input type='submit' name='botao' value='Salvar'>
    </form>

<?php

    }
    else{
        echo "ID INVÁLIDOS";
    }
?>