<?php

include("./conexao.php");

//RECEBE DADOS DO IMPUT ENDEÇADOS NO ATRIBUTO NAME
$nome_comp = $_POST["nome_comp"];
$idade = $_POST["idade"];
$profissao = $_POST["profissao"];

//ESCREVE NA TELA OS DADOS RECEBIDOS PARA CONFERENCIA
echo $nome_comp.'<BR>';
echo $idade.'<BR>';
echo $profissao.'<BR>';


$sql = "INSERT INTO 	testeform.tb_pessoa (NOME_COMP, IDADE, PROFISSAO) VALUES ('$nome_comp', '$idade', '$profissao')";

if ($conn->query($sql) === TRUE) {
  echo "Registro salvo com sucesso<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$consulta = "SELECT NOME_COMP, IDADE, PROFISSAO FROM testeform.tb_pessoa";
$result = $conn->query($consulta);

?>