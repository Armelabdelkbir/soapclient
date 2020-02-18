<?php

$soapclient = new SoapClient('http://172.18.0.4:8080/ode/processes/homecloud?wsdl');

$params = array('SNN' => $_GET['SSN'] , 'homeprice' => $_GET['home'] , 'loanamount' => $_GET['Loan']);

$response = $soapclient->process($params);

var_dump($response);
