<?php

use Service\Config;

class ConfigTest extends PHPUnit_Framework_TestCase
{

    private $config;

    function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->config = new Config();
    }

    public function testGet()
    {

        $data = $this->config->get();
        $this->assertArrayHasKey('config', $data);
        $this->assertNotEmpty($data);
        $this->assertArrayHasKey('config', $data);
    }

    public function testGetNot()
    {
        $data = $this->config->get();
        $this->assertArrayHasKey('config', $data);
        $this->assertNotEmpty($data);
        $this->assertArrayHasKey('config', $data);
    }

}