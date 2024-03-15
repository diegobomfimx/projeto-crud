<?php include('connect_php.php');
include('header.php');
?>


<div class="container">
  <div class="subcontainer">
    <h2>Todos os Estudantes</h2>
    <!-- Botão para abrir o modal de adicionar estudante -->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar Estudante</button>
  </div>
  <table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Executando a consulta para puxar todos os estudantes
      $query = "SELECT * FROM estudantes";

      $result = mysqli_query($connection, $query);

      if (!$result) {
        die("query failed" . mysqli_error($connection));
      } else {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['idade'] ?></td>
            <td><a href="update_page1.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Atualizar</a></td>
            <td><a href="delete_page.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Deletar</a></td>
          </tr>
      <?php
        }
      }

      ?>

    </tbody>
  </table>
  <?php


  // Exibindo mensagens de sucesso ou erro, se existirem

  if (isset($_GET['insert_msg'])) {
    echo '<h6>' . $_GET['insert_msg'] . '</h6>';
  }

  ?>

  <?php

  if (isset($_GET['message'])) {
    echo '<h6>' . $_GET['message'] . '</h6>';
  }

  if (isset($_GET['delete_msg'])) {
    echo '<h6>' . $_GET['delete_msg'] . '</h6>';
  }

  ?>


  <!-- Modal para adicionar estudantes -->
  <form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Estudantes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label for="f_name">Name</label>
              <input type="text" name="f_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="l_name">Sobrenome</label>
              <input type="text" name="l_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="idade">Idade</label>
              <input type="text" name="idade" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <input type="submit" class="btn btn-success" name="add_estudantes" value="Confirmar">
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script src="js/bootstrap.js"></script>
</body>

</html>