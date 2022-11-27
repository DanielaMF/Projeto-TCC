<?php 
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Celke - Formulario upload imagem</title>
    <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@900&display=swap');
            .row{
                display: flex;
                flex-direction: row;            
            }
           
            
        </style>
</head>
<body>
<h2>Upload alternativas</h2>
    <?php
    // conectar com servidor e o banco de dados
    if (isset($_POST['SalvarFoto']))
    {
    $id_resposta        = $_POST['id_resposta'];
    $id_pergunta      	= $_POST['id_pergunta'];
    $descricao  	    = $_POST['descricao'];
    $status 		    = $_POST['status'];
    
    $sql = "insert into resposta (id_resposta,id_pergunta,descricao,status)
                       values ('$id_resposta','$id_pergunta','$descricao','$status')";//inseri no banco
    echo ($sql);
    $resultado = mysql_query($sql);// Verificação
    echo($resultado);
    if ($resultado==0)
            { echo "Falha ao gravar dados informados";
            }
    else
        {  echo "Dados cadastrados com sucesso";
            // header('Location: cadastrousuario.html');
        }
    }
    ?>
    <form  method="POST" action="up_resposta.php" >
        <br>
        <div class="row">
            <div class="alternativa1">
            <h2>Alternativa 1</h2>
                <label>Numero: </label>
                <input type="text" name="id_resposta" id="id_resposta" placeholder="O id: "  ><br><br>
                
                <label>Id pergunta: </label>
                <input type="text" name="id_pergunta" id="id_pergunta" placeholder="o id: "  ><br><br>
                
                <label>Descrição: </label>
                <input type="text" name="descricao" id="descricao" placeholder="descricao: "  ><br><br>
                
                <label>Status: </label>
                <input type="text" name="status" id="status" placeholder="status: "  ><br><br>
            </div>
            
        <input type="submit" value="Cadastrar" name="SalvarFoto">
    </form>
</body>