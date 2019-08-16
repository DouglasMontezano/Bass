<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Vendas extends CI_Model
{
    /////////////////////////////////////////////////////// Insere na tabela vendas
    public function CREATE($vet)
    {
        $this->db->trans_start();
        $this->db->insert('vendas', $vet);
        $this->db->trans_complete();
        //return $this->db->mysql_insert_id();
        $query = $this->db->query('SELECT LAST_INSERT_ID()');
        $row = $query->row_array();
        return $row['LAST_INSERT_ID()'];
    }

    // CHAMADA PARA LISTAR__(_OS_)_INNER DE 3 TABELAS PUXANDO O CLIENTE E O FUNCIONARIO
    public function GETALL()
    {
        $this->db-> select ('*');
        $this->db-> join('clientes c','v.id_cliente= c.id_cliente','inner');
        $this->db-> join('funcionarios f','v.id_funcionario=f.id_funcionario','inner');
        $this->db->order_by('id_venda');
        return $this->db->get('vendas v')->result();
    }
    public function GETALLITENSVENDAS($id)
    {
        $this->db->select('*');
        $this->db->where('vi.id_venda',$id);
        $this->db-> join('produtos_servicos ps','vi.id_prod_serv = ps.id_prod_serv','inner');
        $this->db-> join('vendas v','vi.id_venda = v.id_venda','inner');
        return $this->db->get('vendas_itens vi')->result();
    }
    // Busca informações pelo ID da OS no banco para carregar (EditOs).
    public function GETBYID($id)
    {
        $this->db-> join('clientes c','v.id_cliente= c.id_cliente','inner');
        $this->db-> join('funcionarios f','v.id_funcionario= f.id_funcionario','inner');
        $this->db->where('id_venda',$id);
        return $this->db->get('vendas v')->result();
    }
    // Busca lista de clientes para carregar o dropdow na (vw_Cad_Vendas).
    public function GETCLI()
    {
        return $this->db->get('clientes')->result();
    }

    // Busca lista de funcionarios para carregar o dropdow na (vw_Cad_Vendas).
    public function GETFUNC()
    {
        return $this->db->get('funcionarios')->result();
    }

    public function GETPRODSERV()
    {
        return $this->db->get('produtos_servicos')->result();
    }

    /////////////////////////////////////////////////////// Atualiza (Vendas).
    public function UPDATE($id,$vet)
    {
        $this->db->where('id_venda',$id);
        return $this->db->update('vendas',$vet);
    }   

    /////////////////////////////////////////////////////// Deleta (Vendas).
    public function DELETE($id)
    {
        $this->db->where('id_venda', $id);
        return $this->db->delete('vendas');
    }

    // Busca Vendas por letra ou palavra digitada no campo busca
    public function GETFORVENDAS($busca)
    {
        $this->db->like('id_venda',$busca);
        $this->db->or_like('situacao_venda',$busca);
        $this->db->or_like('nome_cliente',$busca);
        $this->db->or_like('data_venda',implode('-',array_reverse(explode('/',$busca))));
        $this->db-> join('clientes c','v.id_cliente=c.id_cliente','inner');
        $this->db-> join('funcionarios f','v.id_funcionario=f.id_funcionario','inner');
        return $this->db->get('vendas v')->result();
    }
    // função que retorna o valor quando selecionado o combo box prod/serv
    public function retorna_valor_by_prodserv($id)
    {
        $this->db->where('id_prod_serv',$id);
        $this->db->select('valor_venda_prod_serv');
        echo json_encode($this->db->get('produtos_servicos')->result());
    }
    ///////////////////////////////////////////
    public function CREATE_ITEM_VENDAS($vet)
    {
        $this->db->insert('vendas_itens',$vet);
    }
    ////////////////////////////////////////////////////////////////////

    //busca o valor atual da venda e retorna para o controller
    public function GET_VAL_TOT_VENDA($id)
    {
        $this->db->where('id_venda',$id);
        $this->db->select('valor_tot_venda');
        return $this->db->get('vendas')->result();

    }
    // funcão que vai atualizar o total da venda na tabela vendas
    public function UPDATE_VAL_TOT_VENDA($id, $valor_tot_venda)
    {
        $this->db->where('id_venda',$id);
        $this->db->set('valor_tot_venda',$valor_tot_venda);
        return $this->db->update('vendas');
    }
    
    //////////////////////////////////////////////////////////////
    public function  DELETE_ITEM($id_item_vendas)
    {
        $this-> db-> where('id_item_venda',$id_item_vendas);
        return $this->db-> delete('vendas_itens');
    }
    
}































