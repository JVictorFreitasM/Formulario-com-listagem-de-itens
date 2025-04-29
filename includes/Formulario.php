<?php
class Formulario {
  public function form() {
    return '
    <form action="processa.php" method="GET">
      <label>Nome:
        <input class="input" type="text" name="nome" placeholder="Digite seu Nome" required>
      </label>
      <label>Email:
        <input class="input" type="email" name="email" placeholder="nome@exemplo.com" required>
      </label>
      <label> Areas de interesse:
        <input type="checkbox" name="interesses[]" value="Back-End"> Back-End
        <input type="checkbox" name="interesses[]" value="Front-End"> Front-End
        <input type="checkbox" name="interesses[]" value="Analize de Dados"> Analize de Dados"
        <input type="checkbox" name="interesses[]" value="I.A."> I.A.
        <input type="checkbox" name="interesses[]" value="Gestão"> Gestão
      </label>
      <label>Estado:
        <select class=check name="estado" required>
          <option value="">Selecione</option>
          <option value="PI">Piauí</option>
          <option value="CE">Ceará</option>
          <option value="PB">Paraiba</option>
          <option value="PE">Pernambuco</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="SE">Sergipe</option>
          <option value="MA">Maranhão</option>
          <option value="AL">Alagoas</option>
          <option value="BA">Bahia</option>
        </select>
      </label>
      <label>Mensagem:
        <textarea class="input" name="mensagem" placeholder="Digite um Comentário"></textarea>
      </label>
      <button class="button" type="reset">Limpar</button>
      <button class=""button type="submit">Enviar</button>
    </form>';
  }
}