<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Clientes extends CI_Model
{
    ///////////////////////////////////////////////////////////////////////////////////
    public function CREATE($vet)
    {
          return $this->db->insert ('clientes', $vet);
    }
    //////////////////////////////////////////////////////////////////////////////////// consulta todos registros em clientes
    public function GETALL()
    {
        return $this->db->get('clientes')->result();
    }

    //////////////////////////////////////////////////////////////////////////////// consulta a qualquer coisa na tabela clientes
    public function  GetForCli($busca)
{
    $this->db->LIKE ('nome_cliente',$busca);
    return $this->db->get ('clientes')->result();
}

    ////////////////////////////////////////////////////////////////////////////////////
    public function GETBYID($id)
    {
         $this->db->where('id_cliente',$id);
         return  $this->db->get ('clientes')->result();
    }
    ////////////////////////////////////////////////////////////////////////////////////
    public function UPDATE($id,$vet)
    {
         $this->db->where('id_cliente',$id);
         return $this->db->update ('clientes', $vet);
     }
    ////////////////////////////////////////////////////////////////////////////////////
    public function DELETE($id)
    {
        $this->db->where('id_cliente', $id);
        return $this->db->delete('clientes');
    }

    //Consulta os buscando na coluna situacao as Ordens de serviço em aberto
    public function SITUACAO_OS($id)
    {
      $this->db->where('id_cliente',$id);
      $this->db->select('situacao');
      return $this->db->get('os')->result();
    }

}



