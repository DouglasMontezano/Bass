<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Administrativo extends CI_Controller
{
    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    public function PainelAdministrativo()
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Cabecalho');
        $this->load->view('vw_Administrativo');
    }
}
