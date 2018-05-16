<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Login extends CI_Controller
{
// chama a view login
    public function Chama_Login()
    {
        $this->load->view ('vw_Cabecalho.php');
        $this->load->view('vw_Login.php');
    }
//verifica sessao
    public function Verifica_Sessao(){
         //verifica a chave logado
         if($this->session->userdata('logado')==false)
         {
            redirect('login');
         }
    }
//chama painel administrativo
    public function Administrativo()
    {
        $this-> Verifica_Sessao();
        redirect('adm');
    }
// Função que loga o funcionario
    public function Logar()
    {
        //post vindo do form de login
        $data['email']= $this->input->post('email');
        $data['senha']= $this->input->post('senha');
        $this->load->model('model_Login');
        $objmodel=new model_Login();
        //buscando usuario e senha no banco pelo metodo GET e atribuindo seu retorno ao vetor usuario
        $dataretorno['usuario']=$objmodel->GET($data);
        // se no vetor usuario tiver algum conteudo, incluo o conteudo dele na sessão.
        if (count($dataretorno['usuario'])==1)
        {
            //recebendo nome e id do funcionario para dentro do vetor dados juntamente setando o indice logado com o valor true
            $user['nome']   = $dataretorno['usuario'][0]->nome_funcionario;
            $user['id']     = $dataretorno['usuario'][0]->id_funcionario;
            $user['logado'] = true;
            // setando a sessão com os dados do vetor
            $this->session->set_userdata($user);
            //liberando o acesso ao painel administrativo
            redirect('adm');
        }
        else
        {   // SE NÃO encontrar um usuario e senha corretos no banco redireciona para o formulário de login

            $this->session->set_flashdata('errologin','<h4><font color="white">Erro de login, Email ou Senha incorretos </font></h4>');
            $this->load->view('vw_Login');
        }
    }
//funçao que faz logout do usuário passando uma mensagem de sucesso
    public function Logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('sessao-encerrada','<h4><font color="white">Sessão encerrada com sucesso</h4>');
        $this->load->view('vw_Login');

    }



}
