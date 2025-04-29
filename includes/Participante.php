<?php
class Participante {
  public $nome;
  public $interesses;
  public $estado;
  public $mensagem;
  public $data;

  public function __construct($nome, $interesses, $estado, $mensagem) {
    $this->nome = $nome;
    $this->interesses = $interesses;
    $this->estado = $estado;
    $this->mensagem = $mensagem;
    $this->data = date('Y-m-d H:i:s');
  }

  public function toArray() {
    return [
      'nome' => $this->nome,
      'interesses' => $this->interesses,
      'estado' => $this->estado,
      'mensagem' => $this->mensagem,
      'data' => $this->data
    ];
  }
}