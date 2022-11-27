<?php
include 'conexao.php';

$obs           = $_POST['obs'];
$id_disciplina = $_POST['conteudo'];
$idpro         = $_POST['idpro'];

$sql = "SELECT id_pergunta, id_disciplina, id_prova, descricao_p 
       FROM pergunta WHERE obs = '".$obs."'AND id_disciplina = '".$id_disciplina."' AND id_prova = '".$idpro."'";

$result =  mysqli_query($conn, $sql);
if((mysqli_num_rows($result) <= 0)){
    echo "Nenhuma disciplina selecionada...";
}


while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>".$row['id_pergunta']."</td>";
    echo "<td>".$row['descricao_p']."</td>";
    echo "<td><a href='verpergunta.php?idper=".$row['id_pergunta']."'><button class='btn btn-primary btn-xs'onchange='myFunction()' name='pesquisar''><i class='fa fa-bookmark'></i></button></a>";
    echo "</td>";
    echo "</tr>";
}


/*
    
    $sql = "SELECT * FROM pergunta ORDER BY 'id_pergunta' LIMIT 1";
    $resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta");
    $sql2 = "SELECT * FROM resposta  ORDER BY 'id_pergunta' LIMIT 5 ";
    $resultado2 = mysql_query($sql2) or die ("Não foi possível realizar a consulta");
    $linha=mysql_fetch_array($resultado);

    if ($obs == $linha['obs']){
        
        if((@mysql_num_rows($resultado) == 0) and (@mysql_num_rows($resultado2) == 0)) //or die("Nenhum registro encontrado")
        {
        echo "Nenhum registro encontrado";
        }
        else
        {
            while (($linha=mysql_fetch_array($resultado)) and ($linha2=mysql_fetch_array($resultado2)))
            {
                echo "<label>Questão {$linha['id_pergunta']} </label>";
                echo "<img src='./".$linha['foto_pergunta']."' height='4 00' width='400' />" ;
                echo "<label > {$linha['descricao']} </label>";
                //fazer as 5 questões
                if($linha['id_pergunta'] == $linha2['id_pergunta'] ){
                    echo "<p>";
                    echo "<input type='radio'>";
                    echo "<button{$linha2['descricao']}> </button>";
                    echo "</p>";
                }
            }
        }
    }  




    
if((@mysql_num_rows($resultado) == 0) and (@mysql_num_rows($resultado2) == 0)) 
        {
        echo "Nenhum registro encontrado";
        }
        elseif (($linha=mysql_fetch_array($resultado)) and ($linha2=mysql_fetch_array($resultado2))) {
                echo "<label>Questão {$linha['id_pergunta']} </label>";
                echo "<br><br>";
                echo "<img src='./".$linha['foto_pergunta']."' height='400' width='400' />" ; 
                echo "<br><br>";
                echo "<label > {$linha['descricao']} </label>";
                //fazer as 5 questões
                if($linha['id_pergunta'] == $linha2['id_pergunta'] ){
                    echo "<p>";
                    echo "<input type='radio'>";
                    echo "<button{$linha2['descricao']}> </button>";
                    echo "</p>";
                }
            }
        
        
*/
?>