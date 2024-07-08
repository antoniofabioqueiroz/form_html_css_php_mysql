<?php

include("./conexao.php"); //ABRE CONEXÃO COM O BANCO DE DADOS

$consulta = "SELECT NOME_COMP, IDADE, PROFISSAO FROM testeform.tb_pessoa";
$result = $conn->query($consulta);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="container_DB">
    <?php
    //VERIFICA SE A ATD DE LINHA É 0 SE FOR, NÃO FAZER NADA.
        if ($result->num_rows > 0) 
        {  
            echo"<table border="."1".">";
            echo"<tr>";
              echo"<th>Nome Completo</th>";
              echo"<th>Idade</th>";
              echo"<th>Profissão</th>";
            echo"</tr>";

            //ESCREVE OS DADOS LINHA À LINHA VINDOS DO BANCO.
            while($row = $result->fetch_assoc()) 
            {   
                echo"<tr>";
                  echo"<td>".$row["NOME_COMP"]."</td>";
                  echo"<td>".$row["IDADE"]."</td>";
                  echo"<td>".$row["PROFISSAO"]."</td>";
                echo"</tr>";
            }
            echo "</table>";
        }             
    ?>
    <div class="botao">
    <button><a href="cadastro.html"> Voltar </button>
    </div>
    </div>
</body>
</html>