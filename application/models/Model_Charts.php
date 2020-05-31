<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Charts extends CI_Model
{
    public function GET_RECEITAS()
    {
        $this->db->select_sum('valor_lancamento');
        $this->db->Where('tipo_lancamento', 'Receita');             
        return $this->db->get('lancamentos')->result();    
        
    }
    
    public function GET_DESPESAS()
    {
        $this->db->select_sum('valor_lancamento');
        $this->db->Where('tipo_lancamento', 'Despesa');        
        return $this->db->get('lancamentos')->result_array();
    }
}