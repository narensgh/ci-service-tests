<?php

class Config extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $con = new Service\Config();
        $config = $con->get();
        header('Content-Type: application/json');
        echo json_encode($config);
        exit;
    }

}