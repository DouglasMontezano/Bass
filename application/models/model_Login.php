<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Login extends CI_Model
{
    public function GET($data)
    {
        $this->db->where('email_funcionario', $data['email']);
        $this->db->where('senha_funcionario', $data['senha']);
        return $this->db->get('funcionarios')->result();
    }

}



