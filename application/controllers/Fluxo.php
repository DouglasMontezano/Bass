<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fluxo extends CI_Controller
{


    public function Verifica_Sessao()
    {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    // Função que carrega painel Lancamentos
    public function PainelFluxo()
    {
        $this->Verifica_Sessao();
        $this->ListaFluxo();
    }
    //Lista todos lancamentos
    public function ListaFluxo()
    {
        $this->Verifica_Sessao();
        $this->template->load("layouts/lay_pattern", "vw_Fluxo");
        // $this->load->view('vw_Fluxo');
        $this->load->model('model_Fluxo');
        $objModel = new model_Fluxo();
        $retorno1 = $objModel->GETRECEITAS();
        $retorno2 = $objModel->GETDESPESAS();
        $this->load->view('vw_Lista_Fluxo', array('resultado' => $retorno1) + array('resultado2' => $retorno2));
    }
    public function GetForFluxo()
    {
        $this->Verifica_Sessao();
        $busca = $this->input->post('busca');
        $this->load->view('vw_Fluxo');
        $this->load->model('model_Fluxo');
        $objModel = new model_Fluxo();
        $retorno = $objModel->GETFORFLUXO($busca);
        $this->load->view('vw_Lista_Fluxo', array('resultado' => $retorno));
    }
}



