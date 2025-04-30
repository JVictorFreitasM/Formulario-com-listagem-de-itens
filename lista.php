<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<?php require_once 'includes/ParticipanteRepositorio.php'; ?>

<main>
  <h1>Lista de Participantes</h1>
  <ul>
    <?php
    // Cria uma instância objeto repositorio, que aponta para o arquivo onde os dados estão salvos
    $repo = new ParticipanteRepositorio('data/participantes.json');
     // Obtém a lista de participantes do arquivo
    $participantes = $repo->listar();
    //percorre os objetos do array e seleciona os atributos desse objeto
    if ($participantes) {
      foreach ($participantes as $p) {
        //Printa a listagem na tela, mostrando Nome, Estado e os interesses. Implode transforma o array interesses[] em string, onde cada indice é separado com virgula, como foi definido no metodo.
        echo "<li>{$p['nome']} - {$p['estado']} - " . implode(', ', $p['interesses']) . "</li>";
      }
    } else {
      //Printa a mensagem abaixo se não houverem participantes cadastrados.
      echo "<li>Nenhum participante cadastrado.</li>";
    }
    ?>
  </ul>
</main>

<?php include 'includes/footer.php'; ?>