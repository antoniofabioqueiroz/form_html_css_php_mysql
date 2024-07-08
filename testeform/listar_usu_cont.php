<?php

include("./conexao.php"); //ABRE CONEXÃO COM O BANCO DE DADOS
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
    $consulta = "SELECT * FROM  testeform.tb_pessoa ORDER BY ID DESC";
    $result = $conn->query($consulta);

    //VERIFICA SE A ATD DE LINHA É 0 SE FOR, NÃO FAZER NADA.
        if ($result->num_rows > 0) 
        {  
            echo"<table border="."1".">";
            echo"<tr>";
              echo"<th>Nome Completo</th>";
              echo"<th>Idade</th>";
              echo"<th>Profissão</th>";
              echo"<th>Editar</th>";
              echo"<th>Excluir</th>";
            echo"</tr>";

            //ESCREVE OS DADOS LINHA À LINHA VINDOS DO BANCO.
            while($row = $result->fetch_assoc()) 
            {   
                echo"<tr>";
                  echo"<td>".$row["NOME_COMP"]."</td>";
                  echo"<td>".$row["IDADE"]."</td>";
                  echo"<td>".$row["PROFISSAO"]."</td>";
                  echo"<td><button>Editar</button></td>";
            }
        }
    ?>
                  <td><form method="post"><button type="submit"><input type="hidden" name="excluir" value=<?php= $row["ID"] ?>>Excluir</button></form></td>       
        </tr>
        </table>
    <?php

if(isset($_POST['excluir']) && filter_input(INPUT_POST, 'excluir', FILTER_VALIDATE_INT) !== false){

    $id = mysqli_real_escape_string($con, $_POST['excluir']);

    $sql2     = "delete from testeform.tb_pessoa where ID='$id'";
    $qry2     = mysqli_query($conn,$sql2);

}

?>

    <div class="botao">
    <button><a href="cadastro.html"> Voltar </button>
    </div>
    </div>
</body>
</html>