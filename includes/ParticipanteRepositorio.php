<?php
require_once 'Participante.php';

class ParticipanteRepositorio {
  private $arquivo;

  public function __construct($arquivo) {
    $this->arquivo = $arquivo;
  }

  public function adicionar(Participante $p) {
    $dados = $this->listar();
    $dados[] = $p->toArray();
    file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
  }

  public function listar() {
    if (!file_exists($this->arquivo)) return [];
    $conteudo = file_get_contents($this->arquivo);
    return json_decode($conteudo, true);
  }
}