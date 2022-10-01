<?php
require 'conect.php';

$nome=filter_input(INPUT_POST,'nome');
$whats=filter_input(INPUT_POST,'whats');
$chave=filter_input(INPUT_POST,'chave');
$nomechave=filter_input(INPUT_POST,'nomechave');
$numero=filter_input(INPUT_POST, 'num');


if($nome && $whats && $chave && $nomechave && $numero ){

    $pdo->query("INSERT INTO jogadores (nome,whatsapp,chave,nome_chave,numero) values('$nome','$whats','$chave','$nomechave',$numero)");
}
 else{
    header("Location:index.php");
    exit;
 }




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/pix favi.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <link rel="stylesheet" href="estilo.css">
    <script src="verificar.js"></script>
    <title>*******:::PIX_PREMIADO:::****</title>
</head>
<body>
   <div class="logo">
    <img src="img/boasorte.png"  style="width: 500px; margin-top=40px"  alt="">
   </div>

   

   


    


</div>

<div class=bs>


</div>


    <a href="http://localhost/PIX_PREMIADO/index.php"  rel="noopener noreferrer">
        <input type="button" name="OK" value="VOLTAR" id="apt"></a>
   
</form>





   



   
</body>
</html>



