<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<?php require_once 'includes/Formulario.php'; ?>


<main>
  <h1>Cadastro de Participantes</h1>
  <?php
  //instancia um novo objeto Formulário sempre que é preciso adicionar um novo participante
    $formulario = new Formulario();
    //Printa o formulário html na tela a partir do método form()
    echo $formulario->form();
  ?>
</main>

<?php include 'includes/footer.php'; ?>