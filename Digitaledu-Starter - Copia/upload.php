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

    <h2>Upload perguntas</h2>
    <!-------------------------- Fazer upload das perguntas do site---------------------------------->

    <?php
    // conectar com servidor e o banco de dados

    if (isset($_POST['SalvarFoto']))
    {
    $id_pergunta        = $_POST['id_pergunta'];
    $descricao      	= $_POST['descricao'];
    $id_prova  	    	= $_POST['id_prova'];
    $id_conteudo 		= $_POST['id_conteudo'];
    $obs 		        = $_POST['obs'];
    $foto_pergunta      = $_POST['foto_pergunta'];      // captura a variavel foto pra armazenar no banco

    $pasta_dir = "images_provas/";      // recebe a pasta para armazenar as fotos

    if(!file_exists($pasta_dir)){         // se a pasta nao existir, ele cria a pasta
        mkdir($pasta_dir);
    }

    $foto_nome = $pasta_dir.$foto_pergunta["name"];     // captura o nome do arquivo da foto
    
    move_uploaded_file($foto_pergunta["tmp_name"],$foto_nome);     // move copia da foto (arquivo) para a pasta
    
    $sql = "insert into pergunta (id_pergunta,descricao,id_prova,id_conteudo,obs,foto_pergunta)
                       values ('$id_pergunta','$descricao','$id_prova','$id_conteudo','$obs','$foto_nome')";//inseri no banco

    
    $resultado = mysql_query($sql);// Verificação
    if ($resultado = 0)
            { echo "Falha ao gravar dados informados";
            }
    else
        {  echo "Dados cadastrados com sucesso";
            header('Location: up_resposta.php');
        }
    }
    ?>

    <form  method="POST" action="upload.php" >
        <label>Numero: </label>
        <input type="text" name="id_pergunta" id="id_pergunta" placeholder="O id: "  ><br><br>
        
        <label>Descrição: </label>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição: "  ><br><br>
        
        <label>Id prova: </label>
        <input type="text" name="id_prova" id="id_prova" placeholder="prova: "  ><br><br>
        
        <label>Conteudo: </label>
        <input type="text" name="id_conteudo" id="id_conteudo" placeholder="conteudo: "  ><br><br>
        
        <label>Obs: </label>
        <input type="text" name="obs" id="obs" placeholder="conteudo: " ><br><br>

        <label>Foto: </label>
        <input type="file" name="foto_pergunta" id="foto_pergunta"><br><br>
        <input type="submit" value="Cadastrar" name="SalvarFoto">
        <a href="up_resposta.php">Cadastre-se</a></
        

    </form>
    
</body>

</html>