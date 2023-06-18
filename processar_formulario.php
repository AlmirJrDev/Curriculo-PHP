<?php
// Importe a biblioteca TCPDF
require_once('lib/tcpdf/tcpdf.php');

// Verifica se os dados foram enviados por meio do método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $dataNascimento = $_POST['data_nascimento'];
  $idade = $_POST['idade'];

  // Processar os dados das experiências profissionais
  $empresas = $_POST['empresa'];
  $datasInicio = $_POST['data_inicio'];
  $datasFim = $_POST['data_fim'];

  // Crie o conteúdo do currículo
  $conteudo = 'Nome: ' . $nome . "\n";
  $conteudo .= 'Data de Nascimento: ' . $dataNascimento . "\n";
  $conteudo .= 'Idade: ' . $idade . "\n";
  $conteudo .= "\nExperiências Profissionais:\n";

  if (!empty($empresas) && !empty($datasInicio) && !empty($datasFim)) {
    for ($i = 0; $i < count($empresas); $i++) {
      $empresa = $empresas[$i];
      $dataInicio = $datasInicio[$i];
      $dataFim = $datasFim[$i];

      // Adicione as informações da experiência ao conteúdo do currículo
      $conteudo .= 'Empresa: ' . $empresa . "\n";
      $conteudo .= 'Data de Início: ' . $dataInicio . "\n";
      $conteudo .= 'Data de Fim: ' . $dataFim . "\n\n";
    }
  }

  // Gere o PDF usando o TCPDF
  $pdf = new TCPDF();
  $pdf->SetAutoPageBreak(true, 10);
  $pdf->AddPage();
  $pdf->SetFont('helvetica', '', 12);
  $pdf->Write(0, $conteudo);
  
  // Salve o PDF em um arquivo
  $nomeArquivo = 'curriculo.pdf';
  $pdf->Output($nomeArquivo, 'F');
  
  // Redirecione o usuário para baixar o arquivo PDF gerado
  echo '<script>window.location.href = "' . $nomeArquivo . '";</script>';
}
?>
