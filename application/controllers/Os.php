<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Os extends CI_Controller
{
    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    // Função que carrega painel produtos
    public function PainelOs()
    {
        $this->Verifica_Sessao();
        $this->ListOs();
    }
    //Função que lista as OS
    public function ListOs()
    {
        $this->Verifica_Sessao();
        // $this->load->view('vw_Cabecalho');
        $this->template->load("layouts/lay_pattern", "vw_Os");
<<<<<<< HEAD

=======
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $retorno = $objModel->GETALL();
        $this->load->view('vw_Lista_Os', array('resultado' => $retorno));
    }
    // Função que carrega para a vw_cad_Os um array com todos os clientes e funcionários, para ser carregado nos selcts
    public function FormCadOs()
    {
        $this->Verifica_Sessao();
<<<<<<< HEAD

        $this->template->load("layouts/lay_pattern", "vw_Os");
        // $this->load->view('vw_Os');

=======
        $this->template->load("layouts/lay_pattern", "vw_Os");
        // $this->load->view('vw_Os');
>>>>>>> 5ef1f2516f7e5cdb5f99304a3344dbebc839f9b7
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $retorno = $objModel->GETCLI();
        $retorno2 = $objModel->GETFUNC();
        $this->load->view('vw_Cad_Os', array_merge(array('cliente' => $retorno), array('funcionario' => $retorno2)));
    }
    // Função de cadastro de produtos
    public function CadastraOs()
    {
        $this->Verifica_Sessao();
        $vet['id_cliente'] = $this->input->post('cliente');
        $vet['id_funcionario'] = $this->input->post('idfuncionario');
        $vet['situacao'] = $this->input->post('situacao');
        $date = implode('-', array_reverse(explode('/', $this->input->post('data_cheg'))));
        $time = $this->input->post('hora_cheg');
        $vet['data_cheg'] = "$date.$time";
        $vet['data_prev'] = implode('-', array_reverse(explode('/', $this->input->post('data_prev'))));
        $vet['placa'] = $this->input->post('placa');
        $vet['veiculo'] = $this->input->post('veiculo');
        $vet['descricao_os'] = $this->input->post('descricao');
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $objModel->CREATE($vet);
        redirect('Os/ListOs');
    }
    // Função Edita cliente-> faz um select em clientes, funcionarios e na os do id passado, junta tudo em um array e carrega a vw_Edita_Os
    public function FormEditOs($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Os');

        $this->load->model('model_Os');
        $objModel = new model_Os();
        $vet = $objModel->GETBYID($id);

        $objModel2 = new model_Os();
        $vet2 = $objModel2->GETCLI();

        $objModel3 = new model_Os();
        $vet3 = $objModel3->GETFUNC();
        $this->load->view('vw_Edita_Os', array_merge(array('os' => $vet), array('clientes' => $vet2), array('funcionarios' => $vet3)));
    }
    // Funcao  para salvar o form de edição
    public function SalvarEditOs()
    {
        $this->Verifica_Sessao();
        $id = $this->input->post('id_os');
        $vet['id_cliente'] = $this->input->post('clientes');
        $vet['id_funcionario'] = $this->input->post('idfuncionario');
        $vet['situacao'] = $this->input->post('situacao');
        $date = implode('-', array_reverse(explode('/', $this->input->post('data_cheg'))));
        $time = $this->input->post('hora_cheg');
        $vet['data_cheg'] = "$date.$time";
        $vet['data_prev'] = implode('-', array_reverse(explode('/', $this->input->post('data_prev'))));
        $vet['data_entre'] = implode('-', array_reverse(explode('/', $this->input->post('data_fim'))));
        $vet['placa'] = $this->input->post('placa');
        $vet['veiculo'] = $this->input->post('veiculo');
        $vet['descricao_os'] = $this->input->post('descricao');

        $this->load->model('model_Os');
        $objModel = new model_Os();
        $objModel->UPDATE($id, $vet);
        redirect('Os/ListOs');
    }
    //função que busca OS
    public function GetForOS()
    {
        $this->Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->load->view('vw_Os');
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $retorno = $objModel->GetForOs($busca);
        $this->load->view('vw_Lista_Os', array('resultado' => $retorno));
    }
    
    // função que exclui OS
    public function ExcOs($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $objModel->DELETE($id);
        redirect('Os/ListOs');
    }

    // função que carrega o numero da OS e a lista de produtos/serviços para a view vw_Cad_Itens_Os
    public function FormCadItensOs($id)
    {
        $this->Verifica_Sessao();
        $this->load->view('vw_Os');
        $this->load->model('model_Os');
        $objModel = new model_Os();
        //criando um elemento do array com a $id e recebendo na variável $data1
        $data1 = array('id_os' => "$id", );
        // recebendo o array de todos produtos/serviços vindo do banco.
        $data2['prodserv'] = $objModel->GETPRODSERV();
        //unindo os dois arrays para enviar para vw_Cad_Itens_Os
        $this->load->view('vw_Cad_Itens_Os', array_merge($data1, $data2));
    }

    // Função de listagem de Produtos e serviços de uma OS
    public function ListProdServ($id = null)
    {
        $this->Verifica_Sessao();

        //Busca itens dessa OS
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $retorno = $objModel->GETALLITENSOS($id);
        $this->load->view('vw_Os');
        //Carrega a vw_DadosPdv_Os
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $vet = $objModel->GETBYID($id);

        $objModel2 = new model_Os();
        $vet2 = $objModel2->GETCLI();

        $objModel3 = new model_Os();
        $vet3 = $objModel3->GETFUNC();

        //verifico se existe um lançamento desta os e manda no array
        $this->load->model('model_Lancamentos');
        $objModel4 = new model_Lancamentos();
        $retorno4 = $objModel4->SELECT_EXIST_Os($id);
        // retorna o codigo de lancamento da venda.....
        $retorna_cod_lancamento = $objModel4->GET_COD_LANCAMENTO_OS($id);
        // Se a variável $retorno for vazia, ou seja a O.S não ter itens, irá cadastrar itens no primeiro momento, se já tiver itens,
        // o sistema mostrará os dados da O.S com a listagem dos itens.
        if (empty($retorno)) {
            $data1 = array('id_os' => "$id", );
            $data2['prodserv'] = $objModel->GETPRODSERV();
            $this->load->view('vw_Cad_Itens_Os', array_merge($data1, $data2));
        } else {
            $this->load->view('vw_DadosPdv_Os', array_merge(array('os' => $vet), array('clientes' => $vet2), array('funcionarios' => $vet3)));
            //$this->load->view('vw_Lista_Itens_Os',array('resultado'=>$retorno));
            $this->load->view('vw_Lista_Itens_Os', array_merge(array('existos' => $retorno4)) + (array('resultado' => $retorno))
                + (array('cod_lancamento' => $retorna_cod_lancamento)));
        }
    }
    // Método que cadastra Itens na ordem de serviço selecionada
    public function CadastraItensOs()
    {
        $this->Verifica_Sessao();
        $id_os = $this->input->post('id_os');
        $vet['id_os'] = $this->input->post('id_os');
        $vet['id_prod_serv'] = $this->input->post('prodserv');
        $vet['quant_item'] = $this->input->post('qtd');
        $vet['valor_unit_item'] = $this->input->post('valorunit');
        $vet['desconto_item'] = $this->input->post('desc');
        $vet['valor_tot_item'] = $this->input->post('valortot');
        $aux = $this->input->post('valortot');
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $objModel->CREATE_ITEM_OS($vet);
        //Busca o valor total da os em questão soma ao valor total do item e atualiza na tabela OS.
        $valor_tot_os = $objModel->GET_VAL_TOT_OS($id_os);
        $valor_tot_os = $valor_tot_os[0]->valor_tot_os + $aux;
        $objModel->UPDATE_VAL_TOT_OS($id_os, $valor_tot_os);
        $this->ListProdServ($id_os);
    }

    //função que retorna valor unitario do item selecionado no formulário de cadastro de item
    public function RetornaValorUnitario()
    {
        $this->Verifica_Sessao();
        $idprodserv = $this->input->POST('id_prod_serv');
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $objModel->retorna_valor_by_prodserv($idprodserv);
    }

    //função que exclui item da ordem de serviço
    public function ExcItensOs($id_item_os, $id_os, $val_tot_item)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Os');
        $objModel = new model_Os();
        $objModel->DELETE_ITEM($id_item_os);
        //Busca o valor total da os, diminui do valor total do item e atualiza o valor total da os
        $valor_tot_os = $objModel->GET_VAL_TOT_OS($id_os);
        $valor_tot_os = $valor_tot_os[0]->valor_tot_os - $val_tot_item;
        $objModel->UPDATE_VAL_TOT_OS($id_os, $valor_tot_os);
        $this->ListProdServ($id_os);
    }

    // Finaliza a OS e mandando o registro para lançamentos
    public function Lancar_Os($cod_os, $valor_tot_os)
    {
        $vet['cod_os'] = $cod_os;
        $vet['valor_tot_os'] = $valor_tot_os;
        $vet['tipo_lancamento'] = 'Receita';
        $vet['subtipo_lancamnto'] = 'O.S';
        $vet['situacao'] = 'Concluída';
        $this->load->view('vw_Lancamentos');
        $this->load->view('vw_Cad_Lancamentos_Os', $vet);
    }

    public function Editar_Lancamento_Os($cod_os, $valor_tot_os)
    {
        $vet['cod_os'] = $cod_os;
        $vet['valor_tot_os'] = $valor_tot_os;
        $vet['tipo_lancamento'] = 'Receita';
        $vet['subtipo_lancamnto'] = 'O.S';
        $vet['situacao'] = 'Concluída';
        $this->load->view('vw_Lancamentos');
        $this->load->view('vw_Cad_Lancamentos_Os', $vet);
    }
}