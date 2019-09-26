<?php
defined('BASEPATH') or exit('No direct script access allowed');
$ID_RETURN = 0;

class Vendas extends CI_Controller
{
    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    // Função que carrega painel produtos
    public function PainelVendas()
    {
        $this->Verifica_Sessao();
        $this->ListVendas();
    }
 //Função que lista as Vendas
    public function ListVendas()
    {
        $this->Verifica_Sessao();
        // $this->load->view('vw_Vendas');
        $this->template->load("layouts/lay_pattern", "vw_Vendas");
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $retorno = $objModel->GETALL();
        $this->load->view('vw_Lista_Vendas', array('resultado' => $retorno));
    }
    // Função que carrega para a vw_cad_Vendas um array com todos os clientes e funcionários, para ser carregado nos selcts
    public function FormCadVendas()
    {
        $this->Verifica_Sessao();
        // $this->load->view('vw_Vendas');
        $this->template->load("layouts/lay_pattern", "vw_Vendas");
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $retorno = $objModel->GETCLI();
        $retorno2 = $objModel->GETFUNC();
        $this->load->view('vw_Cad_Vendas', array_merge(array('cliente' => $retorno), array('funcionario' => $retorno2)));
        $idprovisorio = 0;
    }
    // Função de cadastro de Vendas
    public function CadastraVendas()
    {
        $this->Verifica_Sessao();
        $vet['id_cliente'] = $this->input->post('cliente');
        $vet['id_funcionario'] = $this->input->post('funcionario');
        $vet['tipo_venda'] = $this->input->post('tipo_venda');
        $date = implode('-', array_reverse(explode('/', $this->input->post('data_venda'))));
        $time = $this->input->post('hora_venda');
        $vet['data_venda'] = "$date.$time";
        $vet['valor_tot_venda'] = $this->input->post('valor_tot_venda');
        $vet['situacao_venda'] = $this->input->post('situacao_venda');
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $id = $objModel->CREATE($vet);
        redirect('Vendas/ListProdServ/' . $id);
    }

    // Função Edita cliente-> faz um select em clientes, funcionarios e na os do id passado, junta tudo em um array e carrega a vw_Edita_Os
    public function FormEditVendas($id = null)
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_pattern", "vw_Vendas");
        $this->load->model('model_Vendas');

        $objModel = new model_Vendas();
        $vet = $objModel->GETBYID($id);

        $objModel2 = new model_Vendas();
        $vet2 = $objModel2->GETCLI();

        $objModel3 = new model_Vendas();
        $vet3 = $objModel3->GETFUNC();

        $this->load->view('vw_Edita_Vendas', array_merge(array('vendas' => $vet), array('clientes' => $vet2), array('funcionarios' => $vet3)));

    }

    // Funcao  para salvar o form de edição
    public function SalvarEditVendas()
    {
        $this->Verifica_Sessao();
        $id = $this->input->post('id_venda');
        $vet['id_cliente'] = $this->input->post('cliente');
        $vet['id_funcionario'] = $this->input->post('funcionario');
        $vet['tipo_venda'] = $this->input->post('tipo_venda');
        $date = implode('-', array_reverse(explode('/', $this->input->post('data_venda'))));
        $time = $this->input->post('hora_venda');
        $vet['data_venda'] = "$date.$time";
        $vet['situacao_venda'] = $this->input->post('situacao_venda');
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $objModel->UPDATE($id, $vet);
        redirect('Vendas/ListVendas');
    }

    //função que busca Vendas
    public function GetForVendas()
    {
        $this->Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->template->load("layouts/lay_pattern", "vw_Vendas");
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $retorno = $objModel->GetForVendas($busca);
        $this->load->view('vw_Lista_Vendas', array('resultado' => $retorno));
    }

   

    // função que exclui Vendas
    public function ExcVendas($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $objModel->DELETE($id);
        redirect('Vendas/ListVendas');
    }

    // função que carrega o numero da Venda e a lista de produtos/serviços para a view vw_Cad_Itens_Vendas
    public function FormCadItensVendas($id)
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_pattern", "vw_Vendas");
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        //criando um elemento do array com a $id e recebendo na variável $data1
        $data1 = array('id_venda' => "$id", );
        // recebendo o array de todos produtos/serviços vindo do banco.
        $data2['prodserv'] = $objModel->GETPRODSERV();
        //unindo os dois arrays para enviar para vw_Cad_Itens_Vendas
        $this->load->view('vw_Cad_Itens_Vendas', array_merge($data1, $data2));
    }

    // Função de listagem de Produtos e serviços de uma Vendas
    public function ListProdServ($id = null)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        // Busca itens desta venda
        $retorno = $objModel->GETALLITENSVENDAS($id);
        //join em funcionario, clientes de determinada venda, que carrega .. vw_DadosPdv_Vendas.
        $retorno2 = $objModel->GETBYID($id);
        
       //verifico se existe um lançamento desta venda e mando no array
        $this->load->model('model_Lancamentos');
        $objModel2 = new model_Lancamentos();
        // retorna o numero de registros de vendas lançadas...
        $retorno3 = $objModel2->SELECT_EXIST_VENDA($id);
        // retorna o codigo de lancamento da venda.....
        $retorna_cod_lancamento = $objModel2->GET_COD_LANCAMENTO($id);
        
        // if caso seja uma nova venda não mostrar duas vezes o painel vendas..provisório definitivo :) .
        if ($id !== 0) {
            $this->template->load("layouts/lay_pattern", "vw_Vendas");
        }
        // Se a variável $retorno for vazia, ou seja a VENDA não ter itens, irá cadastrar itens no primeiro momento, se já tiver itens,
        // o sistema mostrará os dados da venda com a listagem dos itens.
        if (empty($retorno)) {
            $data1 = array('id_venda' => "$id", );
            $data2['prodserv'] = $objModel->GETPRODSERV();
            $this->load->view('vw_Cad_Itens_Vendas', array_merge($data1, $data2));
        } else {
            $this->load->view('vw_DadosPdv_Vendas', array('vendas' => $retorno2));            
            $this->load->view('vw_Lista_Itens_Vendas', array_merge(array('existvenda' => $retorno3))
                + (array('resultado' => $retorno)) + (array('cod_lancamento' => $retorna_cod_lancamento)));
        }
    }

    // Método que cadastra Itens na Venda selecionada
    public function CadastraItensVendas()
    {
        $this->Verifica_Sessao();
        //se ja existir uma venda a função cadastra os itens com o id findo do formulário normalmente, pois ja terá uma venda cadastradaj
        $id_venda = $this->input->post('id_venda');
        $vet['id_venda'] = $this->input->post('id_venda');
        $vet['id_prod_serv'] = $this->input->post('prodserv');
        $vet['quant_item_venda'] = $this->input->post('qtd');
        $vet['valor_unit_item_venda'] = $this->input->post('valorunit');
        $vet['desconto_item_venda'] = $this->input->post('desc');
        $vet['valor_tot_item_venda'] = $this->input->post('valortot');
        $aux = $this->input->post('valortot');
        //cria o item de venda.
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $objModel->CREATE_ITEM_VENDAS($vet);      
        //Busca o valor total da venda em questão soma ao valor total do item e atualiza na tabela vendas
        $valor_tot_venda = $objModel->GET_VAL_TOT_VENDA($id_venda);
        $valor_tot_venda = $valor_tot_venda[0]->valor_tot_venda + $aux;
        $objModel->UPDATE_VAL_TOT_VENDA($id_venda, $valor_tot_venda);
        $this->ListProdServ($id_venda);
    }
    //vendas esta usando o mesmo ajax para carregar o FormCadastraItens....por isso o ajax busca originalmente pelo método no controller
    // da O.S--->esta função abaixo não esta sendo usada, mas é igual a do controller OS... :)
    public function RetornaValorUnitario()
    {
        $this->Verifica_Sessao();
        $idprodserv = $this->input->POST('id_prod_serv');
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $objModel->retorna_valor_by_prodserv($idprodserv);
    }

    //função que exclui item da Venda
    public function ExcItensVendas($id_item_venda, $id_venda, $val_tot_item)
    {
        $this->Verifica_Sessao();
        $this->load->model('model_Vendas');
        $objModel = new model_Vendas();
        $objModel->DELETE_ITEM($id_item_venda);
        //Busca o valor total da venda, diminui do valor total do item e atualiza o valor total da compra
        $valor_tot_venda = $objModel->GET_VAL_TOT_VENDA($id_venda);
        $valor_tot_venda = $valor_tot_venda[0]->valor_tot_venda - $val_tot_item;
        $objModel->UPDATE_VAL_TOT_VENDA($id_venda, $valor_tot_venda);
        $this->ListProdServ($id_venda);
    }

    // Finaliza a venda mandando o registro para lançamentos
    public function Lancar_Vendas($cod_venda, $valor_tot_venda)
    {
        $vet['cod_venda'] = $cod_venda;
        $vet['valor_tot_venda'] = $valor_tot_venda;
        $vet['tipo_lancamento'] = 'Receita';
        $vet['subtipo_lancamnto'] = 'Venda';
        $vet['situacao_venda'] = 'Concluída';
        $this->load->view('vw_Lancamentos');
        $this->load->view('vw_Cad_Lancamentos_Vendas', $vet);
    }

}