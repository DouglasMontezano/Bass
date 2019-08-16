<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Fluxo extends CI_Model
{
    // Insere na tabela lancamentos
    public function CREATE($vet)
    {
        $this->db->insert('lancamentos', $vet);
    }
    // CHAMADA PARA LISTAR__(_OS_)_INNER DE 3 TABELAS PUXANDO VENDAS E O.S DOS LANCAMENTOS
    public function GETALL()
    {
        $this->db-> select ('*');
        $this->db->order_by('id_lancamento');
        return $this->db->get('lancamentos')->result();
    }
    public function GETRECEITAS()
    {
        $this->db-> select ('*');
        $this->db-> Where('tipo_lancamento', 'Receita');
        $this->db->order_by('id_lancamento');
        return $this->db->get('lancamentos')->result();
    }
    public function GETDESPESAS()
    {
        $this->db-> select ('*');
        $this->db-> Where('tipo_lancamento', 'Despesa');
        $this->db->order_by('id_lancamento');
        return $this->db->get('lancamentos')->result();
    }



    public function GETBYID($id)
    {
        $this->db->where('id_lancamento', $id);
        return $this->db->GET('lancamentos')->result();
    }



    // Busca lancamento
    public function GETFORFLUXO($busca)
    {
        $this->db->like('id_lancamento',$busca);
        $this->db->or_like('data_vencimento_lancamento',implode('-',array_reverse(explode('/',$busca))));
        $this->db->or_like('status_lancamento',$busca);
        $this->db->or_like('tipo_lancamento',$busca);
        $this->db->or_like('subtipo_lancamento',$busca);
        return $this->db->get('lancamentos')->result();
    }

    public function SELECT_EXIST_VENDA($id_venda)
    {
        $this->db-> SELECT('*');
        $this->db->WHERE ('id_venda',$id_venda);
        $num = $this->db->count_all_results('lancamentos');
        return $num;
    }
    public function SELECT_EXIST_OS ($id_os)
    {
        $this->db-> SELECT('*');
        $this->db->WHERE ('id_os',$id_os);
        $num = $this->db->count_all_results('lancamentos');
        return $num;
    }
    // to com a sensação que faz parecido com a de cima
    public function GET_COD_LANCAMENTO($id_venda)
    {
        $this->db-> SELECT('id_lancamento');
        $this->db->WHERE ('id_venda',$id_venda);
        return $this->db->GET('lancamentos')->result();
    }

    public function GET_COD_LANCAMENTO_OS($id_os)
    {
        $this->db-> SELECT('id_lancamento');
        $this->db->WHERE ('id_os',$id_os);
        return $this->db->GET('lancamentos')->result();
    }

}































