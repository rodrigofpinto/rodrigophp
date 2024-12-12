<?php //funcoes.php
  $dbhost = 'localhost';
  $dbname = 'gpsi22';
  $dbuser = 'FDuarte';
  $dbpass = 'password123';
  $ligacao = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($ligacao->connect_error) die("Erro fatal na ligação!");
  //funcao para criar tabela; atencao ainda nao vai criar tabela
  function createTable($nome, $query)
  {
	  queryMysql("CREATE TABLE IF NOT EXISTS $nome($query)");
	  echo "A tabela '$nome' foi criada ou já existe.<br>";
  }
  //funcao para criar query
  function queryMysql($query)
  {
	  global $ligacao;
	  $result = $ligacao->query($query);
	  if (!$result) die("Erro fatal na consulta!");
	  return $result;
  }
  //funcao para destruir sessão e limpar dados no logout
  function destroiSessao()
  {
//limpa todas as variaveis de sessao
$_SESSION = array();
//destroi a sessao e elimina as cookies
if (ini_get("session.use_cookies")){
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
		);
}
session_destroy();
  }
  //funcao para mostrar imagem e aprestancao do utilizador
  function mostrarPerfil($utilizador)
  {
	  if (file_exists("$utilizador.jpg"))
		  echo "<img src='$utilizador.jpg' style='float:left;'>";
	  $result = queryMysql("SELECT * FROM perfis WHERE utilizador='$utilizador'");
	  if ($result->num_rows)
	  {
		  $row = $result->fetch_array(MYSQLI_ASSOC);
		  echo stripslashes($row['texto']) . "<br style='clear:left;'><br>";
	  }
	  else echo "<p>Ainda não há dados.</p><br>";
  }
 ?>