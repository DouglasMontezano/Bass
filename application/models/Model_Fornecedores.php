<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Fornecedores extends CI_Model
{
    ///////////////////////////////////////////////////////////////////////////////////
    public function CREATE($vet)
    {
        return $this->db->insert ('fornecedores', $vet);
    }
    //////////////////////////////////////////////////////////////////////////////////// consulta todos registros em clientes
    public function GETALL()
    {
        return $this->db->get('fornecedores')->result();
    }

    //////////////////////////////////////////////////////////////////////////////// consulta a qualquer coisa na tabela clientes
    public function  GetForFornecedores($busca)
    {
        $this->db->LIKE ('nome_fornecedores',$busca);
        return $this->db->get ('fornecedores')->result();
    }
    ////////////////////////////////////////////////////////////////////////////////////
    public function GETBYID($id)
    {
        $this->db->where('id_fornecedor',$id);
        return  $this->db->get ('fornecedores')->result();
    }
    ////////////////////////////////////////////////////////////////////////////////////
    public function UPDATE($id,$vet)
    {
        $this->db->where('id_fornecedor',$id);
        return $this->db->update ('fornecedores', $vet);
    }
    ////////////////////////////////////////////////////////////////////////////////////
    public function DELETE($id)
    {
        $this->db->where('id_fornecedor', $id);
        return $this->db->delete('fornecedores');
    }

    //Consulta os buscando na coluna situacao as Ordens de serviço em aberto
    /*public function SITUACAO_OS($id)
    {
        $this->db->where('id_cliente',$id);
        $this->db->select('situacao');
        return $this->db->get('os')->result();
    }*/

}



