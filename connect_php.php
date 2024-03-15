<?php
// Definindo as constantes para os parâmetros de conexão com o banco de dados
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "projeto_crud");

// Estabelecendo a conexão com o banco de dados MySQL
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

// Verificando se a conexão foi bem-sucedida
if (!$connection) {
  // Se a conexão falhar, exibir mensagem de erro
  die("Conexão falha");
}
