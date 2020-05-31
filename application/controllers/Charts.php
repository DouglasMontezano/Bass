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
       // $rec = json_encode($this->$objModel->GET_RECEITAS());
        $rec = $this->$objModel->GET_RECEITAS();

        //$desp   = $this->$objModel->GET_DESPESAS();
        /*$merge = array(
            'val_lanc_rec' => $Rec['valor_lancamento'],
            'val_lanc_desp' => $Desp['valor_lancamento']
        );
        */
        var_dump($rec);
       // return $rec;
       
    }


}


