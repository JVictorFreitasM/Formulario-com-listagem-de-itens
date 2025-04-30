<?php
require_once 'Participante.php';
// Define a classe responsável por gerenciar o armazenamento de participantes
class ParticipanteRepositorio {
  // Atributo que armazena o caminho do arquivo JSON onde os dados serão salvos
  private $arquivo;
// Construtor da classe, recebe o nome do arquivo e armazena no atributo  
  public function __construct($arquivo) {
    $this->arquivo = $arquivo;
  }
 // Método para adicionar um novo participante ao arquivo
  public function adicionar(Participante $p) {
     // Lê os participantes já existentes no arquivo
    $dados = $this->listar();
    // Converte o novo participante para array e adiciona à lista
    $dados[] = $p->toArray();
     // Salva todos os participantes no arquivo em formato JSON com indentação
    file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
  }
  // Método para listar todos os participantes armazenados no arquivo
  public function listar() {
    // Se o arquivo não existir, retorna um array vazio
    if (!file_exists($this->arquivo)) return [];
    // Lê o conteúdo do arquivo
    $conteudo = file_get_contents($this->arquivo);
    // Converte o conteúdo JSON em um array associativo e retorna:
    return json_decode($conteudo, true);
  }
}