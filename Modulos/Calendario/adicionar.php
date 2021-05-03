<?php
if(isset($_POST['botao']) && $_POST['botao'] ==
'Salva'){
    $qualserviço = $_POST['qual serviço?'];
    $maisdetalhes = $_POST['mais detalhes'];
    $datadesejada = $_POST['data desejada'];
    $quantidade = $_POST['quantidade'];

try{
    $sql = "INSERT INTO calendario (qual serviço?, mais detalhes, datadesejada, quantidade ) VALUES (:qual serviço?, :mais detalhes, :data desejada, :quantidade )";
    $stmt = DB::conexao()->prepare($sql);
    $stmt->bindParam(':qual serviço?', $qualserviço);
    $stmt->bindParam(':mais detalhes', $maisdetalhes);
    $stmt->bindParam(':data desejada', $datadesejada);
    $stmt->bindParam(':quantidade', $quantidade);
    $stmt->execute();
    
    echo "Registro Efetuado com sucesso!";
}   catch(Exception $e){

    echo "Erro ao Inserir Registro:<br/> [".$e->getMessage()." ]";

    }
}

?>

<Form method = 'post' action = "">
Qual serviço?:         <input type= "text" name= 'qual serviço?'></br>
Mais detalhes:         <input type= "text" name= 'mais detalhes'></br>
Data desejada:         <input type= "text" name= 'Data desejada'></br>
Quantidade:            <input type= "text" name= 'quantidade'></br>
<input type='submit' name='botao' value='Salvar'>

</form>