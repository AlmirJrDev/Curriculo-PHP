<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulário de Dados Pessoais</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form-container">
    <h2>Formulário de Dados Pessoais</h2>
    <form action="processar_formulario.php" method="POST">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required>

      <label for="data_nascimento">Data de Nascimento:</label>
      <input type="date" name="data_nascimento" id="data_nascimento" required>

      <label for="idade">Idade:</label>
      <input type="number" name="idade" id="idade" required>

      <div id="experiencias-container">
        <h3>Experiências Profissionais:</h3>
        <div class="experiencia">
          <label for="empresa">Empresa:</label>
          <input type="text" name="empresa[]" required>
          
          <label for="data_inicio">Data de Início:</label>
          <input type="date" name="data_inicio[]" required>

          <label for="data_fim">Data de Fim:</label>
          <input type="date" name="data_fim[]" required>
        </div>
      </div>

      <button type="button" id="adicionar-experiencia">+</button>

      <button type="submit">Enviar</button>
    </form>
  </div>

  <script src="js/script.js"></script>
</body>
</html>
