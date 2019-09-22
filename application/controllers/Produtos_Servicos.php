<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_Servicos extends CI_Controller
{

    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    // Função que carrega painel produtos
    public function PainelProdutos()
    {
        $this->Verifica_Sessao();
        $this->ListProdutos();
    }

    public function PainelServicos()
    {
        $this->Verifica_Sessao();
        $this->ListServicos();
    }

    // Função que carrega o form de cadastro deprodutos
    public function FormCadProdutos()
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Produtos');
        $this->load->view('vw_Cad_Produtos');
    }

    // Função de cadastro de produtos
    public function CadastraProdutos()
    {
        $this->Verifica_Sessao();
        $vet['nome_prod_serv'] = $this->input->post('nome_prod_serv');
        $vet['tipo_prod_serv'] = $this->input->post('tipo_prod_serv');
        $vet['marca_prod_serv'] = $this->input->post('marca_prod_serv');
        $vet['qtd_estoque_prod_serv'] = $this->input->post('qtd_estoque_prod_serv');
        $vet['valor_venda_prod_serv'] = $this->input->post('valor_venda_prod_serv');
        $vet['data_compra_prod_serv'] = implode('-', array_reverse(explode('/', $this->input->post('data_compra_prod_serv'))));
        $vet['servico'] = '0';
        $vet['descricao_prod_serv'] = $this->input->post('descricao_prod_serv');

        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $objModel->CREATE($vet);
        redirect('Produtos_Servicos/ListProdutos');
    }
    // Função Edita cliente-> faz um select em clientes com o id a ser editado e passa o retorno pelo $data para carregar o form
    public function EditProdutos($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Produtos');
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $data['produtos'] = $objModel->GETBYID($id);
        $this->load->view('vw_Edita_Produtos', $data);
    }
    // função que salva o form de edição
    public function SalvarEditProdutos()
    {
        $this->Verifica_Sessao();
        $id = $this->input->post('id_prod_serv');
        $vet['nome_prod_serv'] = $this->input->post('nome_prod_serv');
        $vet['tipo_prod_serv'] = $this->input->post('tipo_prod_serv');
        $vet['marca_prod_serv'] = $this->input->post('marca_prod_serv');
        $vet['qtd_estoque_prod_serv'] = $this->input->post('qtd_estoque_prod_serv');
        $vet['valor_venda_prod_serv'] = $this->input->post('valor_venda_prod_serv');
        $vet['data_compra_prod_serv'] = implode('-', array_reverse(explode('/', $this->input->post('data_compra_prod_serv'))));
        $vet['servico'] = '0';
        $vet['descricao_prod_serv'] = $this->input->post('descricao_prod_serv');
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $objModel->UPDATE($id, $vet);
        redirect('Produtos_Servicos/ListProdutos');
    }

    public function GetForProd()
    {
        $this->Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->load->view('vw_Produtos');
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $retorno = $objModel->GetForProd($busca);
        $this->load->view('vw_Lista_Produtos', array('resultado' => $retorno));
    }

    public function ListProdutos()
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Produtos');
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $retorno = $objModel->GETALL_Prod();
        $this->load->view('vw_Lista_Produtos', array('resultado' => $retorno));
    }

    public function ExcProdutos($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $objModel->DELETE($id);
        redirect('Produtos_Servicos/ListProdutos');
    }

    //////////////////////// SERVICOS ///////////////////////////////

    public function FormCadServicos()
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_pattern.php", "vw_Servicos");
        $this->load->view('vw_Cad_Servicos');
    }

    public function CadastraServicos()
    {
        $this->Verifica_Sessao();
        $vet['nome_prod_serv'] = $this->input->post('nome_prod_serv');
        $vet['tipo_prod_serv'] = $this->input->post('tipo_prod_serv');
        $vet['valor_venda_prod_serv'] = $this->input->post('valor_venda_prod_serv');
        $vet['servico'] = '1';
        $vet['descricao_prod_serv'] = $this->input->post('descricao_prod_serv');

        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $objModel->CREATE($vet);
        redirect('Produtos_Servicos/ListServicos');
    }

    /////////////////////////////////////////////////////////////////////
    public function EditServicos($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $data['servicos'] = $objModel->GETBYID($id);
        $this->template->load("layouts/lay_pattern.php", "vw_Servicos");
        $this->load->view('vw_Edita_Servicos', $data);
    }

    public function SalvarEditServicos()
    {
        $this->Verifica_Sessao();
        $id = $this->input->post('id_prod_serv');
        $vet['nome_prod_serv'] = $this->input->post('nome_prod_serv');
        $vet['tipo_prod_serv'] = $this->input->post('tipo_prod_serv');
        $vet['valor_venda_prod_serv'] = $this->input->post('valor_venda_prod_serv');
        $vet['servico'] = '1';
        $vet['descricao_prod_serv'] = $this->input->post('descricao_prod_serv');

        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $objModel->UPDATE($id, $vet);
        redirect('Produtos_Servicos/ListServicos');
    }

    //////////////////////////////////////////////////////////////////////
    public function ListServicos()
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_pattern.php", "vw_Servicos");
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $retorno = $objModel->GETALL_Serv();
        $this->load->view('vw_Lista_Servicos', array('resultado' => $retorno));
    }
    public function GetForServ()
    {
        $this->Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->load->view('vw_Servicos');
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $retorno = $objModel->GetForServ($busca);
        $this->load->view('vw_Lista_Servicos', array('resultado' => $retorno));
    }

    public function ExcServicos($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Produtos_Servicos');
        $objModel = new model_Produtos_Servicos();
        $objModel->DELETE($id);
        redirect('Produtos_Servicos/ListServicos');
    }
}
