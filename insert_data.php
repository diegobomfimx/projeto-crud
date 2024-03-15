<?php
include 'connect_php.php';

if (isset($_POST['add_estudantes'])) {
  // Obtém os dados do formulário
  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $idade = $_POST['idade'];

  // Verifica se o primeiro nome foi preenchido
  if ($fname == "" || empty($fname)) {
    header('location:index.php?message=Precisa preencher o primeiro nome');
  } else {
    // Prepara e executa a consulta SQL para adicionar um novo estudante
    $query = "insert into `estudantes` (`first_name`, `last_name`, `idade`) values ('$fname', '$lname','$idade' )";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query Failed" . mysqli_error($connection));
    } else {
      header('location:index.php?insert_msg=Dados Adcionados com sucesso.');
    }
  }
}
