<title> isaías </title>
<?php
require_once "exercicioPratico04.html";
$n1= $_POST["n1"];
$n2= $_POST["n2"];
$op= $_POST["op"];
if($op=="Soma"){
$soma= $n1+$n2;
echo $soma;
}else if($op=="Subtração"){
$sub= $n1-$n2;
echo $sub;
}else if($op=="Multiplicação"){
$mult= $n1*$n2;
echo $mult;
}else if($op=="Divisão"){
$div= $n1/$n2;
echo $div;
}else{
echo "Selecione a operação desejada";
}
?>
