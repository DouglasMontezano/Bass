<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msgm extends CI_Controller
{

    public function MostraMsgSucess($indice=null)
    {
        $vet= array
        (
          0 =>'<div class="alert alert-success" role="alert"> <a class="alert-link"> <?=print(Ordem de Serviço não possui ítens );?> </a>',
          1 =>'',
          2 =>'',
          3 =>'',
          4 =>'',
        );
        //return $this->$vet[$indice]->result()
    }

     public function MostraMsgErro($indice=null)
    {
        $vet= array
        (
          0 =>'Cliente não pode ser excluido, existem ordens de serviços vinculadas a ele --> O Cliente Será Desativado',
          1 =>'',
          2 =>'',
          3 =>'',
          4 =>'',
        );

        $retorno['mensagem'] = $vet[$indice];
        $this->load->view('vw_Lista_Clientes', $retorno);
    }


}
?>