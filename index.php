<?php
/**
 * This file is part of the PHPJasper/phpjasper
 * @author Daniel Rodrigues Lima (geekcom)
 */
require __DIR__ . '/vendor/autoload.php';

use Examples\Examples;

$examples = new Examples;

//Compile jrxml into .jasper
//$examples->compileExample();

//Process file .jrxml or .jasper
//$examples->processExample();

//List Parameters-> .jrxml or .jasper
//$examples->listParametersExample();

//Generate reports from a database
//$examples->DbExample();

//Generate reports from a database with subreports
//$examples->DbExampleWithSubReport();

//Generate reports from a XML file
//$examples->XMLExample();

//Generate reports from a JSON file
//$examples->JsonExample();