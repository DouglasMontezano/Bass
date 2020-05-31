<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Charts extends CI_Controller
{

    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    public function Get_Rec_Desp()
    {
        $this->load->model('Model_Charts');
        $objModel = new Model_Charts();       
        $rec = $this->$objModel->GET_RECEITAS();      
        $desp = $this->$objModel->GET_DESPESAS();      
       
    }
}


