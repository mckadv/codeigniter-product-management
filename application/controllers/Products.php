<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Products extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Products_model");
        //$this->load->library('session');
    }
