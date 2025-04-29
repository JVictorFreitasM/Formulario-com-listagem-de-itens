<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<?php require_once 'includes/ParticipanteRepositorio.php'; ?>

<main>
  <h1>Lista de Participantes</h1>
  <ul>
    <?php
    $repo = new ParticipanteRepositorio('data/participantes.json');
    $participantes = $repo->listar();

    if ($participantes) {
      foreach ($participantes as $p) {
        echo "<li>{$p['nome']} - {$p['estado']} - " . implode(', ', $p['interesses']) . "</li>";
      }
    } else {
      echo "<li>Nenhum participante cadastrado.</li>";
    }
    ?>
  </ul>
</main>

<?php include 'includes/footer.php'; ?>