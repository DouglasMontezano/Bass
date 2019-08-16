<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Funcionarios extends CI_Model
{
    ///////////////////////////////////////////////////////////////////////////////////
    public function CREATE($vet)
    {
        return $this->db->insert('funcionarios', $vet);
    }

    //////////////////////////////////////////////////////////////////////////////////// consulta todos registros em clientes
    public function GETALL()
    {
        return $this->db->get('funcionarios')->result();
    }

    //////////////////////////////////////////////////////////////////////////////// consulta a qualquer coisa na tabela clientes
    public function GetForFunc($busca)
    {
        $this->db->LIKE('nome_funcionario', $busca);
        return $this->db->get('funcionarios')->result();
    }

    ////////////////////////////////////////////////////////////////////////////////////
    public function GETBYID($id)
    {
        $this->db->where('id_funcionario', $id);
        return $this->db->get('funcionarios')->result();
    }

    ////////////////////////////////////////////////////////////////////////////////////
    public function UPDATE($id, $vet)
    {
        $this->db->where('id_funcionario', $id);
        return $this->db->update('funcionarios', $vet);
    }

    ////////////////////////////////////////////////////////////////////////////////////
    public function DELETE($id)
    {
        $this->db->where('id_funcionario', $id);
        return $this->db->delete('funcionarios');
    }
}






