<?php

require_once '../lib/nusoap.php';

$Cliente = new nusoap_client("https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl", true);
$Valores = array ('ubiNum'=>'15','dNum'=>'25.40');

$NumberToWordsResult = $Cliente->call('NumberToWords',$Valores);
$NumberToDollarsResult = $Cliente->call('NumberToDollars',$Valores);

$Salida=array($NumberToWordsResult,$NumberToDollarsResult);
print_r($Salida);
?>
