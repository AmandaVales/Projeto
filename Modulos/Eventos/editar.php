<?php 
    include('config/DB.php');
    if(isset($_POST["botao"])&& $_POST["botao"] == "Salvar"){
        $id = $_POST['id_eventos'];
        $categoria_de_orcamento = $_POST['categoria de orcamento'];
        $qual_serviço_voce_necessita = $_POST['qual servico voce necessita'];
        $prazo_de_entrega = $_POST['prazo de entrega'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $localizacao_do_fornecedor = $_POST['localizacao do fornecedor'];
        
        $sql = "UPDATE eventos SET 
            categoria de orçamento = :categoria de orçamento, 
            qual servico voce necessita? =:qual servico voce necessita?, 
            prazo de entrega = :prazo de entrega, 
            estado = :estado, 
            cidade = :cidade, 
            bairro = :bairro, 
            localizacao do fornecedor = :localizacao do fornecedor

            WHERE id_eventos = :id_eventos";

        $stmt = DB::conexao()->prepare($sql);
        $stmt->bindParam(':categoria de orçamento', $categoria_de_orcamento);
        $stmt->bindParam(':qual servico voce necessita?', $qual_serviço_voce_necessita);
        $stmt->bindParam(':prazo de entrega', $prazo_de_entrega);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':localizacao de fornecedor', $localizacao_do_fornecedor);
        $stmt->execute();
    }
        
?>   

<?php

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM cliente where id_cliente = :id_cliente";

    $stmt = DB::Conexao()->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $cliente = $stmt->Fetchall(PDO::FETCH_ASSOC);

?>

    <Form method = 'post' action = "">
    Categoria de orçamento:          
    <input type= "text" name= 'categoria de orçamento' value="<?php echo $eventos[0]('categoria de orcamento')?>"/><br>
    Qual de serviço você necessita?:         
    <input type= "text" name= 'qual servico voce necessita?' value="<?php echo $eventos[0]('qual servico voce necessita?')?>"/><br>
    Prazo de entrega:      
    <input type= "text" name= 'prazo de entrega' value="<?php echo $eventos[0]('prazo de entrega')?>"/><br>
    Estado:      
    <input type= "text" name= 'estado' value="<?php echo $eventos[0]('estado')?>"/><br>
    Cidade:      
    <input type= "text" name= 'cidade' value="<?php echo $eventos[0]('cidade')?>"/><br>
    Bairro:      
    <input type= "text" name= 'bairro' value="<?php echo $eventos[0]('bairro')?>"/><br>
    Localização do fornecedor:      
    <input type= "text" name= 'localizacao de fornecedor' value="<?php echo $eventos[0]('localizacao do fornecedor')?>"/><br>



    <input type='submit' name='botao' value='Salvar'>

    </form>

<?php

    }
    else{
        echo "ID INVÁLIDOSS";
    }
?>