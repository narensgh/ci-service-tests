<?php

error_reporting(0);
class Templates extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $templates = array(
            "1" => array(
                "id" => "1",
                "type" => "sticky",
                "html" => "<h1>Hi, This is sticky bar 1</h1>"
            ),
            "2" => array(
                "id" => "2",
                "type" => "sticky",
                "html" => "<h1>Hi, This is sticky bar 2</h1>"
            )
        );
        $id = $this->input->post("id");
        header('Content-Type: application/json');
        echo json_encode(array("template" => $templates[$id]));
    }

}