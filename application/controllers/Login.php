<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function Index()
	{
		$title = 'Login';
		// $this->template->load("layouts/lay_login/lay_login.php", "vw_Login");
		$this->template->load("layouts/lay_pattern.php", "vw_Login");
	}
	//verifica sessao
	public function Verifica_Sessao()
	{
		//verifica a chave logado
		if ($this->session->userdata('logado') == false) {
			redirect('login');
		}
	}
	//chama painel administrativo
	public function Administrativo()
	{
		$this->Verifica_Sessao();
		redirect('adm');
	}
	// Função que loga o funcionario
	public function Logar()
	{		
		//post vindo do form de login
		$data['email'] = $this->input->post('email');
		$data['senha'] = $this->input->post('senha');
		$this->load->model('Model_Login');
		$objmodel = new Model_Login();
		//buscando usuario e senha no banco pelo metodo GET e atribuindo seu retorno ao vetor usuario
		$dataretorno['usuario'] = $objmodel->GET($data);
		//echo $dataretorno['usuario'];
		// se no vetor usuario tiver algum conteudo, incluo o conteudo dele na sessão.
		if (count($dataretorno['usuario']) == 1) {
			//recebendo nome e id do funcionario para dentro do vetor dados juntamente setando o indice logado com o valor true
			$user['nome'] = $dataretorno['usuario'][0]->nome_funcionario;
			$user['id'] = $dataretorno['usuario'][0]->id_funcionario;
			$user['logado'] = true;
			// setando a sessão com os dados do vetor
			$this->session->set_userdata($user);
			//liberando o acesso ao painel administrativo			
			redirect('adm');
		}
		// SE NÃO encontrar um usuario e senha corretos no banco redireciona para o formulário de login
		else {
			$this->session->set_flashdata('errologin', '<font color="white">Erro de login, Email ou Senha incorretos </font>');
			$this->Index();
			var_dump($data);
			var_dump($dataretorno['usuario']);
		}
	}
	//funçao que faz logout do usuário passando uma mensagem de sucesso
	public function Logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('sessao-encerrada', '<h4><font color="white">Sessão encerrada com sucesso</h4>');
		$this->Index();
	}
}