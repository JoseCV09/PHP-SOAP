<?php

require_once '../lib/nusoap.php';

$Cliente = new nusoap_client("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl", true);
$Valores = array ('plengua'=>'C','pcurso'=>'2011-12', 'pcoddep'=>'B142','pcodest'=>'');

$wsasideptoResult = $Cliente->call('wsasidepto',$Valores);
print_r($wsasideptoResult);

?>
