<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Produtos_Servicos extends CI_Model
{
    public function CREATE($vet)
    {
          return $this->db->insert ('produtos_servicos', $vet);
    }

    public function GETALL_Prod()
    {

       $this->db->WHERE('servico','0');
       return $this->db->get('produtos_servicos')->result();
    }

    public function GETALL_Serv()
    {
        $this->db->WHERE('servico','1');
        return $this->db->get('produtos_servicos')->result();
    }

    // Busca de produtos_servicos
    public function GetForProd($busca)
    {
       $this->db->WHERE('servico','0');
       $this->db->LIKE ('nome_prod_serv',$busca);
       return $this->db->get ('produtos_servicos')->result();
    }
    public function GetForServ($busca)
    {
       $this->db->WHERE('servico','1');
       $this->db->LIKE ('nome_prod_serv',$busca);
       return $this->db->get ('produtos_servicos')->result();
    }

    public function GETBYID($id)
    {
         $this->db->where('id_prod_serv',$id);
         return  $this->db->get ('produtos_servicos')->result();

    }

    //atualiza o produto passado pelo id.
    public function UPDATE($id,$vet)
    {
         $this->db->where('id_prod_serv',$id);
         return $this->db->update ('produtos_servicos', $vet);
     }

    public function DELETE($id)
    {
        $this->db->where('id_prod_serv', $id);
        return $this->db->delete('produtos_servicos');

    }


}

