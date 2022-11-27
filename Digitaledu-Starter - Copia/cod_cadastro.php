<?php
// conectar com servidor e o banco de dados
include 'conexao.php';

if (isset($_POST['cadastrar']))
{
$usuario      	= $_POST['usuario'];
$nome  	    	= $_POST['nome'];
$email 			= $_POST['email'];	
$login			= $_POST['usuario'];
$senha 			= $_POST['senha'];
$senha 			= md5($senha);
$sql = "insert into cadastro (usuario,nome,email,login,senha)
               	values ('$usuario','$nome','$email','$usuario','$senha')";//Insert no banco
				   
$resultado = mysqli_query($conn, $sql);	//Verificação
if ($resultado){ 
	echo "Dados cadastrados com sucesso";
	header('Location: login.html');
}
else{  
	echo "Falha ao gravar dados informados";
}
}
?>

