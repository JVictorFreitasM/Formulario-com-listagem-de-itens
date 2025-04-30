<?php
class Participante {
   // Armazena os dados do participante
  public $nome;
  public $interesses;
  public $estado;
  public $mensagem;
  public $data;
  // Construtor da classe que recebe os dados do participante
  public function __construct($nome, $interesses, $estado, $mensagem) {
    $this->nome = $nome;
    $this->interesses = $interesses;
    $this->estado = $estado;
    $this->mensagem = $mensagem;
    $this->data = date('d-m-y');
  }
  // Metodo para converter o objeto em array para salvar no JSON
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