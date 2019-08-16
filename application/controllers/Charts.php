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
        $Rec    = $this->Model_Charts->GET_RECEITAS();
        $Desp   = $this->Model_Charts->GET_DESPESAS();
        $merge = array(
            'valor_lancamento_rec' => $Rec['valor_lancamento'],
            'valor_lancamento_desp' => $Desp['valor_lancamento']
        );
        echo json_encode($merge);
    }


}


