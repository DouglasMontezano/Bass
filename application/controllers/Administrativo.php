<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrativo extends CI_Controller
{
    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
<<<<<<< HEAD
            redirect('login');            
=======
            redirect('login');
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
        }
    }
    public function PainelAdministrativo()
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_adm/lay_adm.php", "vw_Administrativo");
    }
}
