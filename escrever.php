<<!doctype html>



<html>


<head>

<title>formularios
</title>
<meta charset="utf-8"/>
</head>
<body>

<?php
$nome=$_POST['f_nome'];

$msg=$_POST['f_msg'];


$conteudo=$msg."/r/n".$nome."/r/n";



$arquivo=fopen("visitas.txt","a");


fwrite($arquivo,$conteudo);


echo "mensagem gravada: $conteudo";


fclose($arquivo);




?>

<hr/>
<a href="index.html" target="_self">voltar</a>

</body>

</html>