<?php
$filename = date('dmyhis').'.xls';
$dados = array(

);

//Verifica se existem dados a serem processados
if(empty($dados)) {
    header("location: intranet.php");
}

//Pega o nome das colunas utilizando a posição [0] do array
$nome_colunas = array_keys($dados[0]);

//linha de Header dos dados
$cabeçalho_tabela = '<tr><th>'.implode('</th><th>',$nome_colunas).'</th></tr>';

$detalhes_tabela = '';
//Dados
foreach ($dados as $numero_array => $valor) {
    //Pega os dados a serem processados (Segundo array.... exp: $dados[0]=>(PEGANDO ESTE ARRAY))
    $valores = array_values($valor);
    $detalhes_tabela.= '<tr><td>'.implode('</td><td>',$valores).'</td></tr>';
}

//Headers para o download Não pode ter saida nenhuma na tela antes disso.
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=".$filename);
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);

//Montando a tabela
echo '<table>';
echo $cabeçalho_tabela;
echo $detalhes_tabela;
echo '</table>';
