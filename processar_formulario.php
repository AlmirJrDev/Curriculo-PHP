<?php
// Verifica se os dados foram enviados por meio do método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $dataNascimento = $_POST['data_nascimento'];
  $idade = $_POST['idade'];

  // Faça o processamento dos dados aqui, como salvá-los em um banco de dados ou exibi-los na página
  // ...

  // Exemplo de exibição dos dados na página
  echo "Nome: " . $nome . "<br>";
  echo "Data de Nascimento: " . $dataNascimento . "<br>";
  echo "Idade: " . $idade . "<br>";
}
?>
