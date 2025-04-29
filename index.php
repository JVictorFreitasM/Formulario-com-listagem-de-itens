<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<?php require_once 'includes/Formulario.php'; ?>


<main>
  <h1>Cadastro de Participantes</h1>
  <?php
    $formulario = new Formulario();
    echo $formulario->render();
  ?>
</main>

<?php include 'includes/footer.php'; ?>