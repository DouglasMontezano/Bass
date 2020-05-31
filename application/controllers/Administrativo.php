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


    public function Get_Rec_Desp()
    {
        $this->load->model('Model_Charts');
        $objModel=new Model_Charts();       
        $rec = $objModel->GET_RECEITAS();        
        $desp =$objModel->GET_DESPESAS();        
    }   

    public function PainelAdministrativo()
    {
        $this->Verifica_Sessao();
        $rec  = $this->Get_Rec_Desp();
        $desp = $this->Get_Rec_Desp();              
    

        $this->template->load("layouts/lay_pattern.php", "vw_Administrativo",$rec);
        //$this->template->load('vw_Administrativo',$rec);
        //$this->template->load("layouts/lay_pattern.php", "vw_Administrativo");
    }
      public function time(){
        // date_default_timezone_set(‘America/Sao_Paulo’);  
        return date('d/m/Y H:i:s');
    }
}   