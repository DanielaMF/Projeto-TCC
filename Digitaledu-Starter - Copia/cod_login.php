<?php
// conectar com servidor e o banco de dados
$conectar = mysql_connect('localhost','root','') ;
$banco    = mysql_select_db("site_its");

if (isset($_POST['pesquisar']))
{
  $login   = $_POST['login'];
  $senha   = $_POST['senha'];
  $senha   = md5($senha);


  
  // Verifica se existe usuario com o login e a senha 
  $sql = mysql_query("select * FROM cadastro
                      where login = '$login' and senha = '$senha'");

  $resultado = mysql_num_rows($sql);
  //Verifica se n�o existe o login e a senha digitado
  if ($resultado == 0)
  {
    echo "<script> alert('Usuario ou Senha inválidos!');  </script>";
    echo "<meta http-equiv='refresh' content='0;URL=login.html'>";
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    exit();
  }
  else
  {
    //Cria a sess�o e manda para pagina menu de cadastros
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
      session_start();
      $_SESSION['login'] = $login;
      header('location: index.php');
      exit();
    }
  }

}
?>