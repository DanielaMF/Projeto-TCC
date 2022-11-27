<?php
include_once 'conexao.php';
 
$hashtag    = $_POST['hashtag'];

if (trim($hashtag) <> ""){
    $sql = "SELECT * FROM pergunta";
    $sqldisciplina = "SELECT * FROM disciplina  WHERE nome";
    $resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta");
    $resultadoDisciplina = mysql_query($sqldisciplina) or die ("Não foi possível realizar a consulta");
    if ((trim($resultadoDisciplina)<>"") == (trim($resultado)<>"")){
        if(@mysql_num_rows($resultado) == 0) //or die("Nenhum registro encontrado")
        {
        echo "Nenhum registro encontrado";
        }
        else
        {
        while ($linha=mysql_fetch_array($resultado))
        {
            echo "<Button> {$linha['obs']} </Button>";
        }
        }
        
    }
}
?>
