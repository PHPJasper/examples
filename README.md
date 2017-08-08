# PHPJasper Examples v2.2

How to use:

* Clone or download the repository 
* Run `composer install`
* Execute the examples
---
**Compile jrxml into .jasper**

`
$examples->compileExample();
`

**Process file .jrxml or .jasper**

`$examples->processExample();`

**List Parameters-> .jrxml or .jasper**

`$examples->listParametersExample();`


**Generate reports from a database**

`$examples->DbExample();`

**Generate reports from a database with sub reports**

`$examples->DbExampleWithSubReport();`

**Generate reports from a XML file**

`$examples->XMLExample();`

**Generate reports from a JSON file**

`$examples->JsonExample();`