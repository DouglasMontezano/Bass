<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lancamentos extends CI_Controller
{


    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    // Função que carrega painel Lancamentos
    public function PainelLancamentos()
    {
        $this->Verifica_Sessao();
        $this->ListLancamentos();
    }
    //Lista todos lancamentos
    public function ListLancamentos()
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_pattern", "vw_Lancamentos");
        // $this->load->view('vw_Lancamentos');
        $this->load->model('model_Lancamentos');
        $objModel = new model_Lancamentos();
        $retorno = $objModel->GETALL();
        $this->load->view('vw_Lista_Lancamentos', array('resultado' => $retorno));
    }
    // Função que carrega o form de cadastro de Lancamentos
    public function FormCadLancamentos()
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_pattern", "vw_Lancamentos");
        // $this->load->view('vw_Lancamentos');
        $this->load->model('model_Lancamentos');
        $objModel = new model_Lancamentos();
        $retorno = $objModel->GETFORNECEDORES();
        $this->load->view('vw_Cad_Lancamentos', (array('fornecedores' => $retorno)));
    }

    public function CadastraLancamento()
    {
        $this->Verifica_Sessao();

        if (!empty($this->input->post('id_os'))) {
            $vet['id_os'] = $this->input->post('id_os');
            $id_os = $this->input->post('id_os');
            $vet2['situacao'] = $this->input->post('situacao_os');

        } else {
            $vet['id_os'] = null;
        }

        if (!empty($this->input->post('id_venda'))) {
            $vet['id_venda'] = $this->input->post('id_venda');
            $id_venda = $this->input->post('id_venda');
            $vet2['situacao_venda'] = $this->input->post('situacao_venda');
        } else {
            $vet['id_venda'] = null;
        }

        if (!empty($this->input->post('id_fornecedor'))) {
            $vet['id_fornecedor'] = $this->input->post('id_fornecedor');
        } else {
            $vet['id_fornecedor'] = null;
        }

        $vet['tipo_lancamento'] = $this->input->post('tipo_lancamento');
        $vet['numero_doc_lancamento'] = $this->input->post('numero_doc_lancamento');
        $vet['subtipo_lancamento'] = $this->input->post('subtipo_lancamento');
        $vet['data_lancamento'] = implode('-', array_reverse(explode('/', $this->input->post('data_lancamento'))));
        $vet['data_vencimento_lancamento'] = implode('-', array_reverse(explode('/', $this->input->post('data_vencimento_lancamento'))));
        $vet['valor_lancamento'] = $this->input->post('valor_lancamento');
        $vet['forma_pagamento_lancamento'] = $this->input->post('forma_pagamento_lancamento');
        $vet['descricao_lancamento'] = $this->input->post('descricao_lancamento');
        $vet['status_lancamento'] = $this->input->post('status_lancamento');
        $this->load->model('model_Lancamentos');
        $objModel = new model_Lancamentos();
        $objModel->CREATE($vet);
        //carrega e instancia o model vendas para atualizar a situacao da venda lancada para --> concluida
        if (isset($id_venda)) {
            $this->load->model('model_Vendas');
            $objModel2 = new model_Vendas();
            $objModel2->UPDATE($id_venda, $vet2);
        }
        if (isset($id_os)) {
            $this->load->model('model_Os');
            $objModel2 = new model_Os();
            $objModel2->UPDATE($id_os, $vet2);
        }
        redirect('Lancamentos/ListLancamentos');
    }

    public function EditLancamentos($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Lancamentos');
        $this->load->model('model_Lancamentos');
        $objModel = new model_Lancamentos();
        //Busca os dados da tabela lancamentos para carregar no form
        $retorno = $objModel->GETBYID($id);
        $retorno2 = $objModel->GETFORNECEDORES();
        $this->load->view('vw_Edita_Lancamentos', array_merge(array('lancamento' => $retorno), array('fornecedores' => $retorno2)));
    }   
    
    // função que salva o form de edição
    public function SalvarEditLancamentos()
    {
        $this->Verifica_Sessao();

        $id_lancamento = $this->input->post('id_lancamento');
        $vet['tipo_lancamento'] = $this->input->post('tipo_lancamento');

        if (!empty($this->input->post('id_os'))) {
            $vet['id_os'] = $this->input->post('id_os');
            $id_os = $this->input->post('id_os');
            $vet2['situacao'] = 'Concluída';

        } else {
            $vet['id_os'] = null;
        }

        if (!empty($this->input->post('id_venda'))) {
            $vet['id_venda'] = $this->input->post('id_venda');
            $id_venda = $this->input->post('id_venda');
            $vet2['valor_tot_venda'] = $this->input->post('valor_lancamento');
            $vet2['situacao_venda'] = 'Concluída';

        } else {
            $vet['id_venda'] = null;
        }

        if (!empty($this->input->post('id_fornecedor'))) {
            $vet['id_fornecedor'] = $this->input->post('id_fornecedor');
        } else {
            $vet['id_fornecedor'] = null;
        }
        $vet['numero_doc_lancamento'] = $this->input->post('numero_doc_lancamento');
        $vet['subtipo_lancamento'] = $this->input->post('subtipo_lancamento');
        $vet['data_lancamento'] = implode('-', array_reverse(explode('/', $this->input->post('data_lancamento'))));
        $vet['data_vencimento_lancamento'] = implode('-', array_reverse(explode('/', $this->input->post('data_vencimento_lancamento'))));
        $vet['valor_lancamento'] = $this->input->post('valor_lancamento');
        $vet['forma_pagamento_lancamento'] = $this->input->post('forma_pagamento_lancamento');
        $vet['descricao_lancamento'] = $this->input->post('descricao_lancamento');
        $vet['status_lancamento'] = $this->input->post('status_lancamento');
        $this->load->model('model_Lancamentos');
        $objModel = new model_Lancamentos();
        $objModel->UPDATE($id_lancamento, $vet);

        //carrega e instancia o model vendas para atualizar a situacao da venda lancada para --> concluida
        if (isset($id_venda)) {
            $this->load->model('model_Vendas');
            $objModel2 = new model_Vendas();
            $objModel2->UPDATE($id_venda, $vet2);
        }
        if (isset($id_os)) {
            $this->load->model('model_Os');
            $objModel2 = new model_Os();
            $objModel2->UPDATE($id_os, $vet2);
        }
        redirect('Lancamentos/ListLancamentos');
    }

    public function ExcLancamentos($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Lancamentos');
        $objModel = new model_Lancamentos();
        $objModel->DELETE($id);
        redirect('Lancamentos/ListLancamentos');
    }
    public function GetForLancamentos()
    {
        $this->Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->load->view('vw_Lancamentos');
        $this->load->model('model_Lancamentos');
        $objModel = new model_Lancamentos();
        $retorno = $objModel->GETFORLANCAMENTO($busca);
        $this->load->view('vw_Lista_Lancamentos', array('resultado' => $retorno));
    }

////////////////////////// SERVICOS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//    public function FormCadServicos()
//    {
//        $this-> Verifica_Sessao();
//        $this->load->view('vw_Servicos');
//        $this->load->view('vw_Cad_Servicos');
//    }
//
//    public function CadastraServicos()
//    {
//        $this-> Verifica_Sessao();
//        $vet ['nome_prod_serv']            = $this->input->post('nome_prod_serv');
//        $vet ['tipo_prod_serv']            = $this->input->post('tipo_prod_serv');
//        $vet ['valor_venda_prod_serv']     = $this->input->post('valor_venda_prod_serv');
//        $vet ['servico']                   = '1';
//        $vet ['descricao_prod_serv']     = $this->input->post('descricao_prod_serv');
//
//        $this->load->model('model_Produtos_Servicos');
//        $objModel= new model_Produtos_Servicos();
//        $objModel->CREATE($vet);
//        redirect('Produtos_Servicos/ListServicos');
//    }





}



