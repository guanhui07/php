<?php
$client = new SoapClient(dirname(__FILE__)."/round4_groupH_simple_doclit.wsdl",array("trace"=>1,"exceptions"=>0));
$client->echoIntArrayFault(array(34,12.345));
echo $client->__getlastrequest();
$HTTP_RAW_POST_DATA = $client->__getlastrequest();
include("round4_groupH_simple_doclit.inc");
echo "ok\n";
?>
