<?php
include('connect_php.php');


if (isset($_GET['id'])) {
  $id = $_GET['id'];


  $query = "DELETE FROM `estudantes` WHERE `id` = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query Failed" . mysqli_error($connection));
  } else {
    header('location:index.php?delete_msg=Dados deletados.');
  }
}
