<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Os extends CI_Model
{
    /////////////////////////////////////////////////////// Insere na tabela os
    public function CREATE($vet)
    {
        return $this->db->insert('os', $vet);
    }

    // CHAMADA PARA LISTAR__(_OS_)_INNER DE 3 TABELAS PUXANDO O CLIENTE E O FUNCIONARIO
    public function GETALL()
    {
        $this->db->select('*');
        $this->db->join('clientes c', 'o.id_cliente=c.id_cliente', 'inner');
        $this->db->join('funcionarios f', 'o.id_funcionario=f.id_funcionario', 'inner');
        return $this->db->get('os o')->result();
    }

    public function GETALLITENSOS($id)
    {
        $this->db->select('*');
        $this->db->where('osi.id_os', $id);
        $this->db->join('produtos_servicos ps', 'osi.id_prod_serv = ps.id_prod_serv', 'inner');
        $this->db->join('os o', 'osi.id_os = o.id_os', 'inner');
        return $this->db->get('os_itens osi')->result();
    }

    // Busca informações pelo ID da OS no banco para carregar (EditOs).
    public function GETBYID($id)
    {
        $this->db->join('clientes c', 'o.id_cliente=c.id_cliente', 'inner');
        $this->db->join('funcionarios f', 'o.id_funcionario=f.id_funcionario', 'inner');
        $this->db->where('id_os', $id);
        return $this->db->get('os o')->result();
    }

    // Busca lista de clientes para carregar o dropdow na (vw_Cad_Os).
    public function GETCLI()
    {
        return $this->db->get('clientes')->result();
    }

    // Busca lista de funcionarios para carregar o dropdow na (vw_Cad_Os).
    public function GETFUNC()
    {
        return $this->db->get('funcionarios')->result();
    }

    public function GETPRODSERV()
    {
        return $this->db->get('produtos_servicos')->result();
    }

    /////////////////////////////////////////////////////// Atualiza (os).
    public function UPDATE($id, $vet)
    {
        $this->db->where('id_os', $id);
        return $this->db->update('os', $vet);
    }

    /////////////////////////////////////////////////////// Deleta (os).
    public function DELETE($id)
    {
        $this->db->where('id_os', $id);
        return $this->db->delete('os');
    }

    // Busca OS por letra ou palavra digitada no campo busca
    public function GETFOROS($busca)
    {
        $this->db->like('placa', $busca);
        $this->db->or_like('situacao', $busca);
        $this->db->or_like('nome_cliente', $busca);
        $this->db->or_like('data_cheg', implode('-', array_reverse(explode('/', $busca))));
        $this->db->join('clientes c', 'o.id_cliente=c.id_cliente', 'inner');
        $this->db->join('funcionarios f', 'o.id_funcionario=f.id_funcionario', 'inner');
        return $this->db->get('os o')->result();
    }

    // função que retorna o valor quando selecionado o combo box prod/serv
    public function retorna_valor_by_prodserv($id)
    {
        $this->db->where('id_prod_serv', $id);
        $this->db->select('valor_venda_prod_serv');
        echo json_encode($this->db->get('produtos_servicos')->result());
    }

    public function CREATE_ITEM_OS($vet)
    {
        $this->db->insert('os_itens', $vet);
    }

    //busca o valor atual da OS e retorna para o controller
    public function GET_VAL_TOT_OS($id)
    {
        $this->db->where('id_os', $id);
        $this->db->select('valor_tot_os');
        return $this->db->get('os')->result();

    }

    // funcão que vai atualizar a coluna  valor_tot_os na tabela OS.
    public function UPDATE_VAL_TOT_OS($id, $valor_tot_os)
    {
        $this->db->where('id_os', $id);
        $this->db->set('valor_tot_os', $valor_tot_os);
        return $this->db->update('os');
    }

    public function DELETE_ITEM($id_item)
    {
        $this->db->where('id_item', $id_item);
        return $this->db->delete('os_itens');
    }


}































