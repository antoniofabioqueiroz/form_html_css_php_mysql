<?php
//ABRE CONEXÃO COM O BANCO DE DADOS
include("./conexao.php");

//RECEBE DADOS DO IMPUT ENDEREÇADOS NO ATRIBUTO NAME DO FORM
$nome_comp = $_POST["nome_comp"];
$idade = $_POST["idade"];
$profissao = $_POST["profissao"];

//ESCREVE NA TELA OS DADOS RECEBIDOS PARA CONFERENCIA
echo $nome_comp.'<BR>';
echo $idade.'<BR>';
echo $profissao.'<BR>';

// COMANDO SQL PARA INSERÇÃO NO BANCO DE DADOS MYSQL (C DO CRUD)
$sql = "INSERT INTO testeform.tb_pessoa (NOME_COMP, IDADE, PROFISSAO) VALUES ('$nome_comp', '$idade', '$profissao')";
// ENVIA A QUERY PARA O MYSQL COM O COMAMDO DE INSERÇÃO
if ($conn->query($sql) === TRUE) {
  echo "Registro salvo com sucesso<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// COMANDO SQL PARA CONSULTA NO BANCO DE DADOS MYSQL (R DO CRUD)
$consulta = "SELECT NOME_COMP, IDADE, PROFISSAO FROM testeform.tb_pessoa ORDER by ID DESC";
$result = $conn->query($consulta);
?>
<button><a href="listar_usu.php"> Listar Registros </button>