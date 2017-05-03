<html>
<Head>
<meta charset="utf-8">
<title>EXEMPLOS DE PHP</title>
</Head>
<body>
<center>
<h1>EXEMPLO 8 DO ISAÍAS</h1>
</center>
<?php
$dia=getdate();
echo "<br>";
switch ($dia['wday']){
case 5:
echo "finalmente Sexta";
break;
case 6:
echo "Super sábado";
break;
case 0:
echo "Domingo sonolento";
break;
case 2:
echo "aula de programação";
break;
default:
echo "estou esperando pelo início da greve";
}
?>
</body>
</html>
