<?php

if(isset($_POST["enviar"]))
{

$Titulo = "E-mail enviado pelo Usuario";
$nomerecebido = $_POST["nome"];
$emailrecebido = $_POST["email"];

$mensagem1 = "Informações do Contato\n\nNome: ".$nomerecebido."\nE-mail: ".$emailrecebido."\nMensagem: ";

//digite abaixo seu email
$meuemail="wilian_lopess@hotmail.com";
$Destinatario="$meuemail";

mail("$Destinatario","$Titulo","$mensagem1","From:$emailrecebido");
echo "Mensagem enviada";
}
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="card border-primary">
  <div class="card-header text-white bg-primary text-center">
    <strong> FIQUE POR DENTRO</strong>
  </div>
  <div class="card-body">
    
    <h5 id="emailHelp" class="form-text text-muted text-center">Receba os principais conteudos de programação design e tecnologia em seu email! Inscrevas-se como milhares de outros profissionais</h5>

  <div class="form-group">

<form method="post" action=""/>

<div class="form-group">
<input type="text" name="nome" size="40" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome*">
</div>


<div class="form-group">
<input type="text" name="email" size="40" value="" class="form-control" id="exampleInputPassword1" placeholder="Email*">
</div>





<input type="submit" name="enviar" value="enviar" class="btn btn-primary btn-lg btn-block">
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


