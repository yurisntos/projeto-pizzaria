<?php
require "../funcoes.php";

if (!empty($_GET["id"])) {
  $id = $_GET["id"];
} else {
  header("Location: listaContato.php");
  exit;
}

$sql = "SELECT * FROM usuario WHERE iduser = $id";

$usuario = buscaItem($sql);
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<?php include "../template/head.php" ?>

<body>
  <?php include "../template/navbar.php" ?>

  <div class="container-fluid">
    <div class="row">
      <?php include "../template/sidebar.php" ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <br>
        <div class="row">
          <div class="col">
            <h1>Contatos</h1>
          </div>
        </div>  
        <h3><b>Nome: </b><?= $usuario["nome"] ?></h3>
        <h3><b>E-mail: </b><?= $usuario["email"] ?></h3>
        <h3><b>Telefone: </b><?= $usuario["telefone"] ?></h3>

        <form action="deleteContato.php" method="POST">
          <a class="" href="listaContato.php">
            <button type="button" class="btn btn-warning">Voltar</button>
          </a>
    
          <input type="hidden" name="id" value="<?= $usuario["iduser"] ?>">
          <button type="submit" class="btn btn-danger">Apagar</button>
        </form>
      </main>
    </div>
  </div>

  <?php include "../template/footer.php" ?>
</body>

</html>