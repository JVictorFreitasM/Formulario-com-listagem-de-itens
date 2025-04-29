<?php
require_once 'includes/Participante.php';
require_once 'includes/ParticipanteRepositorio.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $participante = new Participante(
    $_GET['nome'] ?? '',
    $_GET['interesses'] ?? [],
    $_GET['estado'] ?? '',
    $_GET['mensagem'] ?? ''
  );

  $repo = new ParticipanteRepositorio('data/participantes.json');
  $repo->adicionar($participante);

  header('Location: lista.php');
  exit;
}
?>