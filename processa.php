<?php
require_once 'includes/Participante.php';
require_once 'includes/ParticipanteRepositorio.php';
// Verifica se o formulário foi enviado via método GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Cria um novo objeto Participante com os dados recebidos do formulário
  $participante = new Participante(
    $_GET['nome'] ?? '',
    $_GET['interesses'] ?? [],
    $_GET['estado'] ?? '',
    $_GET['mensagem'] ?? ''
  );
// Cria o repositório apontando para o arquivo JSON onde os dados serão armazenados
  $repo = new ParticipanteRepositorio('data/participantes.json');
   // Adiciona o novo participante ao arquivo
  $repo->adicionar($participante);

  header('Location: lista.php');
  exit;
}
?>