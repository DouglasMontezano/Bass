<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedores extends CI_Controller {
////////////////////////////////////////////////////////////////////////// Função que carrega head clientes

    /* function __construct()
     {
         parent::__construct();
     }*/
    //Verifica sessao
    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    public function PainelFornecedores()
    {
        $this-> Verifica_Sessao();
        $this-> ListFornecedores();

    }
////////////////////////////////////////////////////////////////////////// Função que carrega o form de cadastro de clientes
    public function FormCadFornecedores()
    {
        $this-> Verifica_Sessao();
        $this->load->view('vw_Fornecedores');
        $this->load->view('vw_Cad_Fornecedores');
    }
////////////////////////////////////////////////////////////////////////// Função de cadastro de clientes
    public function CadastraFornecedores()
    {
        $this-> Verifica_Sessao();

        $this->form_validation->set_rules ('nome_fornecedor', 'Nome', 'required');
        $this->form_validation->set_rules ('fone_fornecedor', 'Fone', 'required');
        $this->form_validation->set_rules ('fone2_fornecedor', 'Fone 2', '');
        $this->form_validation->set_rules ('email_fornecedor', 'Email', 'required');
        $this->form_validation->set_rules ('endereco_fornecedor', 'Endereço', '');
        $this->form_validation->set_rules ('numero_casa_fornecedor', 'Número Residência', '');
        $this->form_validation->set_rules ('bairro_fornecedor', 'Bairro', '');
        $this->form_validation->set_rules ('cidade_fornecedor', 'Cidade', 'required');
        $this->form_validation->set_rules ('estado_fornecedor', 'Estado', '');
        $this->form_validation->set_rules ('cpf_fornecedor', 'CPF', '');
        $this->form_validation->set_rules ('cnpj_fornecedor', 'CNPJ', '');
        $this->form_validation->set_rules ('nome_vendedor', 'NOME VENDEDOR', '');
        $this->form_validation->set_rules ('fone_vendedor', 'FONE VENDEDOR', '');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('vw_cad_Clientes');
        }
        else
        {
            $vet ['nome_fornecedor']        = $this->input->post('nome_fornecedor');
            $vet ['fone_fornecedor']        = $this->input->post('fone_fornecedor');
            $vet ['fone2_fornecedor']       = $this->input->post('fone2_fornecedor');
            $vet ['email_fornecedor']       = $this->input->post('email_fornecedor');
            $vet ['endereco_fornecedor']    = $this->input->post('endereco_fornecedor');
            $vet ['numero_casa_fornecedor'] = $this->input->post('numero_casa_fornecedor');
            $vet ['bairro_fornecedor']      = $this->input->post('bairro_fornecedor');
            $vet ['cidade_fornecedor']      = $this->input->post('cidade_fornecedor');
            $vet ['estado_fornecedor']      = $this->input->post('estado_fornecedor');
            $vet ['cpf_fornecedor']         = $this->input->post('cpf_fornecedor');
            $vet ['cnpj_fornecedor']         = $this->input->post('cnpj_fornecedor');
            $vet ['nome_vendedor']          = $this->input->post('nome_vendedor');
            $vet ['fone_vendedor']          = $this->input->post('fone_vendedor');

            $this->load->model('model_Fornecedores');
            $objModel= new Model_Fornecedores();
            $objModel->CREATE($vet);
            //$this->load->view('vw_Msg_Sucess');
            redirect('Fornecedores/ListFornecedores');
        }
    }
    // Função Edita cliente-> faz um select em clientes com o id a ser editado e passa o retorno pelo $data para carregar o form
    public function EditFornecedores($id=null)
    {
        $this-> Verifica_Sessao();
        $this->load->model('model_Fornecedores');
        $objModel = new Model_Fornecedores();
        $data['fornecedores']= $objModel->GETBYID($id);
        $this->load->view('vw_Fornecedores');
        $this->load->view('vw_Edita_Fornecedores',$data);
    }
///////////////////////////////////////////////////////////////////////////////// Função que carrega variáveis com o post vindo do form e depois atualiza no banco
    public function SalvarEditFornecedores()
    {
        $this-> Verifica_Sessao();
        $id                             = $this->input->post('id_fornecedor');
        $vet ['nome_fornecedor']        = $this->input->post('nome_fornecedor');
        $vet ['fone_fornecedor']        = $this->input->post('fone_fornecedor');
        $vet ['fone2_fornecedor']       = $this->input->post('fone2_fornecedor');
        $vet ['email_fornecedor']       = $this->input->post('email_fornecedor');
        $vet ['endereco_fornecedor']    = $this->input->post('endereco_fornecedor');
        $vet ['numero_casa_fornecedor'] = $this->input->post('numero_casa_fornecedor');
        $vet ['bairro_fornecedor']      = $this->input->post('bairro_fornecedor');
        $vet ['cidade_fornecedor']      = $this->input->post('cidade_fornecedor');
        $vet ['estado_fornecedor']      = $this->input->post('estado_fornecedor');
        $vet ['cpf_fornecedor']         = $this->input->post('cpf_fornecedor');
        $vet ['cnpj_fornecedor']        = $this->input->post('cnpj_fornecedor');
        $vet ['nome_vendedor']          = $this->input->post('nome_vendedor');
        $vet ['fone_vendedor']          = $this->input->post('fone_vendedor');

        $this->load->model ('model_Fornecedores');
        $objModel= new Model_Fornecedores();
        $objModel->UPDATE($id,$vet);
        redirect('Fornecedores/PainelFornecedores');
    }
////////////////////////////////////////////////////////////////////////// Função que lista todos clientes
    public function ListFornecedores()
    {
        $this-> Verifica_Sessao();
        $this->load->view('vw_Fornecedores');
        $this->load->model('model_Fornecedores');
        $objModel = new Model_Fornecedores();
        $retorno = $objModel->GETALL();
        $this->load->view('vw_Lista_Fornecedores',array('resultado'=>$retorno));
    }
////////////////////////////////////////////////////////////////////////// busca por nome fornecedor ou codigo
    public function GetForFornecedor()
    {
        $this-> Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->load->view('vw_Fornecedores');
        $this->load->model('model_Fornecedores');
        $objModel = new Model_Fornecedores();
        $retorno = $objModel-> GetForFornecedores($busca);
        $this->load->view('vw_Lista_Fornecedores',array('resultado'=>$retorno));
    }
///////////////////////////////////////////////////////////////////////////Função que exclui Fornecedores
    public function ExcFornecedores($id=null)
    {
        $this-> Verifica_Sessao();
        $this->load->model ('model_Fornecedores');
        $objModel = new Model_Fornecedores();
        $objModel-> DELETE($id);
        redirect('Fornecedores/PainelFornecedores');
    }



}

























