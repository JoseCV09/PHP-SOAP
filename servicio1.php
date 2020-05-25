<?php
require_once '../lib/nusoap.php';

$Cliente = new nusoap_client("http://www.dneonline.com/calculator.asmx?wsdl", true);
$Valores = array ('intA'=>'50','intB'=>'10');

$AddResult = $Cliente->call('Add',$Valores);
$SubtractResult = $Cliente->call('Subtract',$Valores);
$MultiplyResult = $Cliente->call('Multiply',$Valores);
$DivideResult = $Cliente->call('Divide',$Valores);

$Salida=array($AddResult,$SubtractResult,$MultiplyResult,$DivideResult);
print_r($Salida);

?>