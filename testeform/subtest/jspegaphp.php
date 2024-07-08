<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$nome = "Meu Jovem";
?>

<button onclick="excluir()">Excluitr</button>

</body>

<script>
                function excluir()
                {
                        var id = "<?php echo $nome; ?>";
                        alert(id);
                        var resultado = confirm("Deseja excluir o item:"+ nome +"?");
                        
                }
</script>

</html>


