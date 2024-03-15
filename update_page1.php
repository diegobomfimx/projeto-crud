// Incluindo o cabeçalho da página e o arquivo de conexão com o banco de dados
<?php include('header.php');
include('connect_php.php');


if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "select * from `estudantes` where `id` = '$id'";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("query failed" . mysqli_error($connection));
  } else {
    $row = mysqli_fetch_assoc($result);
  }
}
// Verificando se o formulário foi enviado
if (isset($_POST['update_estudantes'])) {

  if (isset($_GET['id_new'])) {
    $idnew = $_GET['id_new'];


    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $idade = $_POST['idade'];

    // Construindo a consulta SQL para atualizar os dados do estudante
    $query = "UPDATE `estudantes` SET `first_name` = '$fname', `last_name` = '$lname', `idade` = '$idade' WHERE `id` = '$idnew'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('query failed' . mysqli_error($connection));
    } else {
      header("location:index.php?update_msg=Dados atualizados com sucesso.");
    }
  }
}
?>

<form action="update_page1.php?id_new=<?php echo $id; ?>" method="post">

  <div class="form-group">
    <label for="f_name">Name</label>
    <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>">
  </div>
  <div class="form-group">
    <label for="l_name">Sobrenome</label>
    <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name'] ?>">
  </div>
  <div class=" form-group">
    <label for="idade">Idade</label>
    <input type="text" name="idade" class="form-control" value="<?php echo $row['idade'] ?>">
  </div>
  <input type="submit" class="btn btn-success" name="update_estudantes" value="Atualizar">

</form>