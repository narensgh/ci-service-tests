<?php

namespace Service;

class Config
{

    private $ci;

    function __construct()
    {
//        $this->ci = &get_instance();
    }

    public function get()
    {
        $config = array(
            'config' => array(
                array(
                    "id" => "1",
                    "type" => "sticky"
                ),
                array(
                    "id" => "2",
                    "type" => "sticky"
                )
            )
        );
        return $config;
    }

}