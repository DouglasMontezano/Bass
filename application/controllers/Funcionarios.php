<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller
{
    //Função que verifica se a sessão esta ativa
    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    public function PainelFuncionarios()
    {
        $this-> Verifica_Sessao();
        $this->ListFuncionarios();
    }

    public function ListFuncionarios()
    {
        $this-> Verifica_Sessao();
        $this->load->view('vw_Funcionarios');
        $this->load->model('model_Funcionarios');
        $objModel = new model_Funcionarios();
        $retorno = $objModel->GETALL();
        $this->load->view('vw_Lista_Funcionarios', array('resultado' => $retorno));
    }

// função que exclui funcionário
    public function ExcFuncionarios($id)
    {
        $this-> Verifica_Sessao();
        $this->load->model('model_Funcionarios');
        $objModel = new model_Funcionarios();
        $objModel = $objModel->DELETE($id);
        redirect('Funcionarios/ListFuncionarios');
    }

    public function FormCadFuncionarios()
    {
        $this-> Verifica_Sessao();
        $this->load->view('vw_Funcionarios');
        $this->load->view('vw_Cad_Funcionarios');
    }

    public function CadastraFuncionarios()
    {
        $this-> Verifica_Sessao();
        $this->form_validation->set_rules('nome_funcionario', 'Nome', 'required');
        $this->form_validation->set_rules('fone_funcionario', 'Fone', 'required');
        $this->form_validation->set_rules('email_funcionario', 'Email', 'required');
        $this->form_validation->set_rules('senha_funcionario', 'Senha', 'required');

        $this->form_validation->set_rules('cpf_funcionario', 'CPF', 'required');
        $this->form_validation->set_rules('rg_funcionario', 'RG', 'required');
        $this->form_validation->set_rules('pis_funcionario', 'PIS', 'required');
        $this->form_validation->set_rules('endereco_funcionario', 'Endereço', '');

        $this->form_validation->set_rules('numero_casa_funcionario', 'Número ', '');
        $this->form_validation->set_rules('bairro_funcionario', 'Bairro', '');
        $this->form_validation->set_rules('cidade_funcionario', 'Cidade', 'required');
        $this->form_validation->set_rules('estado_funcionario', 'Estado', '');
        $this->form_validation->set_rules('data_inicio_funcionario', 'Data', '');
        $this->form_validation->set_rules('salario_funcionario', 'Salário', '');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vw_cad_Clientes');
        } else {
            $vet ['nome_funcionario'] = $this->input->post('nome_funcionario');
            $vet ['fone_funcionario'] = $this->input->post('fone_funcionario');
            $vet ['email_funcionario'] = $this->input->post('email_funcionario');
            $vet ['senha_funcionario'] = $this->input->post('senha_funcionario');

            $vet ['cpf_funcionario'] = $this->input->post('cpf_funcionario');
            $vet ['rg_funcionario'] = $this->input->post('rg_funcionario');
            $vet ['pis_funcionario'] = $this->input->post('pis_funcionario');
            $vet ['endereco_funcionario'] = $this->input->post('endereco_funcionario');

            $vet ['numero_casa_funcionario'] = $this->input->post('numero_casa_funcionario');
            $vet ['bairro_funcionario'] = $this->input->post('bairro_funcionario');
            $vet ['cidade_funcionario'] = $this->input->post('cidade_funcionario');
            $vet ['estado_funcionario'] = $this->input->post('estado_funcionario');

            $vet ['data_inicio_funcionario'] = implode('-',array_reverse(explode('/',$this->input->post('data_inicio_funcionario'))));
            $vet ['salario_funcionario'] = $this->input->post('salario_funcionario');

            $this->load->model('model_Funcionarios');
            $objModel = new Model_Funcionarios();
            $objModel->CREATE($vet);
            //$this->load->view('vw_Msg_Sucess');
            redirect('Funcionarios/ListFuncionarios');
        }
    }

    public function EditFuncionarios($id = null)
    {
        $this-> Verifica_Sessao();
        $this->load->model('model_Funcionarios');
        $objModel = new Model_Funcionarios();
        $data['funcionarios'] = $objModel->GETBYID($id);
        $this->load->view('vw_Funcionarios');
        $this->load->view('vw_Edita_Funcionarios', $data);
    }

    public function SalvarEditFuncionarios()
    {
        $this-> Verifica_Sessao();
        $id = $this->input->post('id_funcionario');
        $vet ['nome_funcionario'] = $this->input->post('nome_funcionario');
        $vet ['fone_funcionario'] = $this->input->post('fone_funcionario');
        $vet ['email_funcionario'] = $this->input->post('email_funcionario');
        $vet ['senha_funcionario'] = $this->input->post('senha_funcionario');

        $vet ['cpf_funcionario'] = $this->input->post('cpf_funcionario');
        $vet ['rg_funcionario'] = $this->input->post('rg_funcionario');
        $vet ['pis_funcionario'] = $this->input->post('pis_funcionario');
        $vet ['endereco_funcionario'] = $this->input->post('endereco_funcionario');

        $vet ['numero_casa_funcionario'] = $this->input->post('numero_casa_funcionario');
        $vet ['bairro_funcionario'] = $this->input->post('bairro_funcionario');
        $vet ['cidade_funcionario'] = $this->input->post('cidade_funcionario');
        $vet ['estado_funcionario'] = $this->input->post('estado_funcionario');

        $vet ['data_inicio_funcionario'] = implode('-',array_reverse(explode('/',$this->input->post('data_inicio_funcionario'))));
        $vet ['salario_funcionario'] = $this->input->post('salario_funcionario');

        $this->load->model('model_Funcionarios');
        $objModel = new model_Funcionarios();
        $objModel->UPDATE($id, $vet);
        redirect('Funcionarios/ListFuncionarios');
    }

    public function GetForFunc()
    {
        $this-> Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->load->view('vw_Funcionarios');
        $this->load->model('model_Funcionarios');
        $objModel = new Model_Funcionarios();
        $retorno = $objModel-> GetForFunc($busca);
        $this->load->view('vw_Lista_Funcionarios',array('resultado'=>$retorno));

    }

}
