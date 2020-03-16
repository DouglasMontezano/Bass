<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrativo extends CI_Controller
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
        $this->template->load("layouts/lay_pattern.php", "vw_Administrativo");
    }

      public function time(){
        // date_default_timezone_set(‘America/Sao_Paulo’);
        return date('d/m/Y H:i:s');
    }
}