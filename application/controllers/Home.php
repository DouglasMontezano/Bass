<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

     public function index()
    {
        // $this->load->view('vw_Cabecalho');
        // $this->load->view('vw_home.php');
        $this->template->load("layouts/index", "vw_home");
    }

}
