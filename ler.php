<<!doctype html>



<html>


<head>

<title>formularios
</title>
<meta charset="utf-8"/>
</head>
<body>

<?php




$arquivo=fopen("visitas.txt","r");


while(!feof($arquivo)){
echo fgets($arquivo, 4096);
echo "<br/>".fgets($arquivo,100);
echo "<br/><br/>";


}

fclose($arquivo);


?>


<a href="index.html" target="_self">voltar</a>

</body>

</html>