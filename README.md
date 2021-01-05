# PHPJasper Examples

### How to use
_Do you need Docker and Docker Compose installed in your machine_

* Clone or download the repository;
* Run the commands into the path `/examples`:
    * `docker-compose up -d`;
    * `docker exec -it phpjasperExample composer install`. 
    * `docker exec -it phpjasperExample sudo apk add ttf-dejavu`
---

### Examples
_Use the command `docker exec -it phpjasperExample php index.php` to run examples_

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

**Generate reports from an XML file**

`$examples->XMLExample();`

**Generate reports from a JSON file**

`$examples->JsonExample();`

### Folder structure

* compiled: Compiled .jasper files will be in this folder;
* data_files: Contains data sources for examples;
* input: Contains the reports `.jrxml` files; 
* output: Will have the results of the examples;
* resources: Contains other files.
