<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes extends CI_Controller
{
    //Verifica sessao
    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
<<<<<<< HEAD

=======
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
    public function PainelClientes()
    {
        $this->Verifica_Sessao();
        $this->ListClientes();
    }
<<<<<<< HEAD

=======
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
    // Função que lista todos clientes
    public function ListClientes()
    {
        $this->Verifica_Sessao();
<<<<<<< HEAD
        // $this->load->view('vw_Cabecalho');
        // $this->load->view('vw_Clientes');
        $this->template->load("layouts/lay_pattern", "vw_Clientes");
        $this->load->model('Model_Clientes');
=======
        $this->template->load("layouts/lay_pattern", "vw_Clientes");
        $this->load->model('model_Clientes');
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
        $objModel = new Model_Clientes();
        $retorno = $objModel->GETALL();
        $this->load->view('vw_Lista_Clientes', array('resultado' => $retorno));
    }
<<<<<<< HEAD
// Função que carrega o form de cadastro de clientes

=======
    // Função que carrega o form de cadastro de clientes
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
    public function FormCadClientes()
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Cabecalho');
        $this->load->view('vw_Clientes');
        $this->load->view('vw_Cad_Clientes');
    }
<<<<<<< HEAD
// Função de cadastro de clientes
=======
    // Função de cadastro de clientes
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
    public function CadastraClientes()
    {
        $this->Verifica_Sessao();
        $this->form_validation->set_rules('nome_cliente', 'Nome', 'required');
        $this->form_validation->set_rules('fone_cliente', 'Fone', 'required');
        $this->form_validation->set_rules('fone2_cliente', 'Fone 2', '');
        $this->form_validation->set_rules('email_cliente', 'Email', 'required');
        $this->form_validation->set_rules('cpf_cliente', 'CPF', '');
        $this->form_validation->set_rules('rg_cliente', 'RG', '');
        $this->form_validation->set_rules('endereco_cliente', 'Endereço', '');
        $this->form_validation->set_rules('numero_casa_cliente', 'Número Residência', '');
        $this->form_validation->set_rules('bairro_cliente', 'Bairro', '');
        $this->form_validation->set_rules('cidade_cliente', 'Cidade', 'required');
        $this->form_validation->set_rules('estado_cliente', 'Estado', '');
        $this->form_validation->set_rules('desativado', 'Desativado', '');

        if ($this->form_validation->run() == false) {
            $this->load->view('vw_cad_Clientes');
        } else {
            $vet['nome_cliente'] = $this->input->post('nome_cliente');
            $vet['fone_cliente'] = $this->input->post('fone_cliente');
            $vet['fone2_cliente'] = $this->input->post('fone2_cliente');
            $vet['email_cliente'] = $this->input->post('email_cliente');
            $vet['cpf_cliente'] = $this->input->post('cpf_cliente');
            $vet['rg_cliente'] = $this->input->post('rg_cliente');
            $vet['endereco_cliente'] = $this->input->post('endereco_cliente');
            $vet['numero_casa_cliente'] = $this->input->post('numero_casa_cliente');
            $vet['bairro_cliente'] = $this->input->post('bairro_cliente');
            $vet['cidade_cliente'] = $this->input->post('cidade_cliente');
            $vet['estado_cliente'] = $this->input->post('estado_cliente');
            $vet['desativado'] = $this->input->post('desativado');

            $this->load->model('model_Clientes');
            $objModel = new Model_Clientes();
            $objModel->CREATE($vet);
             //$this->load->view('vw_Msg_Sucess');
            redirect('Clientes/ListClientes');
        }
    }
    // Função Edita cliente-> faz um select em clientes com o id a ser editado e passa o retorno pelo $data para carregar o form
    public function EditClientes($id = null)
    {
        $this->Verifica_Sessao();

        $this->load->model('model_Clientes');
        $objModel = new Model_Clientes();
        $data['clientes'] = $objModel->GETBYID($id);
        $this->load->view('vw_Clientes');
        $this->load->view('vw_Edita_Clientes', $data);
    }

//Função que carrega variáveis com o post vindo do form e depois atualiza no banco
    public function SalvarEditClientes()
    {
        $this->Verifica_Sessao();
<<<<<<< HEAD

=======
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
        $id = $this->input->post('id_cliente');
        $vet['nome_cliente'] = $this->input->post('nome_cliente');
        $vet['fone_cliente'] = $this->input->post('fone_cliente');
        $vet['fone2_cliente'] = $this->input->post('fone2_cliente');
        $vet['email_cliente'] = $this->input->post('email_cliente');
        $vet['cpf_cliente'] = $this->input->post('cpf_cliente');
        $vet['rg_cliente'] = $this->input->post('rg_cliente');
        $vet['endereco_cliente'] = $this->input->post('endereco_cliente');
        $vet['numero_casa_cliente'] = $this->input->post('numero_casa_cliente');
        $vet['bairro_cliente'] = $this->input->post('bairro_cliente');
        $vet['cidade_cliente'] = $this->input->post('cidade_cliente');
        $vet['estado_cliente'] = $this->input->post('estado_cliente');
        $vet['desativado'] = $this->input->post('desativado');

        $this->load->model('model_Clientes');
        $objModel = new Model_Clientes();
        $objModel->UPDATE($id, $vet);
        redirect('Clientes/ListClientes');
    }
///////////////////
    public function GetForCli()
    {
        $this->Verifica_Sessao();

        $busca = $this->input->post('busca');
        $this->load->view('vw_Clientes');
        $this->load->model('model_Clientes');
        $objModel = new Model_Clientes();
        $retorno = $objModel->GetForCli($busca);
        $this->load->view('vw_Lista_Clientes', array('resultado' => $retorno));
    }
//Função que exclui cliente
    public function ExcClientes($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Clientes');
        $objModel = new Model_Clientes();
        $retorno = $objModel->SITUACAO_OS($id);

        if (empty($retorno)) {
            $objModel->DELETE($id);
            redirect('Clientes/ListClientes');
        } else {
            $vet['desativado'] = 1;
            $this->load->model('model_Clientes');
            $objModel = new Model_Clientes();
            $objModel->UPDATE($id, $vet);
            redirect('Clientes/ListClientes');
        }
    }
}

























