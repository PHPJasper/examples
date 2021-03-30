<?php
/**
 * This file is part of the PHPJasper/phpjasper
 * @author Daniel Rodrigues Lima (geekcom)
 */

namespace Examples;

use PHPJasper\PHPJasper;

class Examples
{
    private $PHPJasper;

    public function __construct()
    {
        $this->PHPJasper = new PHPJasper();
    }

    public function compileExample()
    {
        $input_file = __DIR__ . '/input/hello_world.jrxml';
        $output_file = __DIR__ . '/compiled';

        $this->PHPJasper->compile($input_file, $output_file)->execute();
    }

    public function processExample()
    {
        $input = __DIR__ . '/compiled/hello_world.jasper';
        $output = __DIR__ . '/output';
        $options = ['format' => ['pdf', 'rtf', 'xml'], 'locale' => 'en'];

        $this->PHPJasper->process(
            $input,
            $output,
            $options
        )->execute();
    }

    public function listParametersExample()
    {
        $input = __DIR__ . '/input/hello_world_params.jrxml';
        $output = $this->PHPJasper->listParameters($input)->execute();

        foreach ($output as $parameter_description) {
            print '<pre>' . $parameter_description . '</pre>';
        }
    }

    public function DbExample()
    {
        $input = __DIR__ . '/input/teste.jrxml';
        $output = __DIR__ . '/output';
        $options = [
            'format' => ['pdf', 'xml', 'html'],
            'locale' => 'en',
            'params' => [],
            'db_connection' => [
                'driver' => 'generic', //mysql, postgres, oracle, generic (jdbc)
                'username' => 'username',
                'password' => 'password',
                'host' => 'localhost',
                'database' => 'database_name',
                'port' => '0000'
            ]
        ];
        $this->PHPJasper->process(
            $input,
            $output,
            $options
        )->execute();
    }

    public function DbExampleWithSubReport()
    {
        $input = __DIR__ . '/input/Master.jrxml';
        $output = __DIR__ . '/output';
        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => [],
            'resources' => __DIR__ . '/resources', //place of resources
            'db_connection' => [
                'driver' => 'mysql', //mysql, postgres, oracle, generic (jdbc)
                'username' => 'phpjasper',
                'password' => 'phpjasper',
                'host' => 'mysql',
                'database' => 'sub_reports',
                'port' => '3306',
            ]
        ];

        $this->PHPJasper->process(
            $input,
            $output,
            $options
        )->execute();
    }

    public function XMLExample()
    {
        $input = __DIR__ . '/input/CancelAck.jrxml';
        $output = __DIR__ . '/output';
        $data_file = __DIR__ . '/data_files/CancelAck.xml';
        $options = [
            'format' => ['pdf'],
            'params' => [],
            'locale' => 'en',
            'db_connection' => [
                'driver' => 'xml',
                'data_file' => $data_file,
                'xml_xpath' => '/CancelResponse/CancelResult/ID'
            ]
        ];

        $this->PHPJasper->process(
            $input,
            $output,
            $options
        )->execute();
    }

    public function JsonExample()
    {
        $input = __DIR__ . '/input/json.jrxml';
        $output = __DIR__ . '/output';
        $data_file = __DIR__ . '/data_files/contacts.json';
        $options = [
            'format' => ['pdf'],
            'params' => [],
            'locale' => 'en',
            'db_connection' => [
                'driver' => 'json',
                'data_file' => $data_file,
                'json_query' => 'contacts.person'
            ]
        ];

        $this->PHPJasper->process(
            $input,
            $output,
            $options
        )->execute();
    }
}
