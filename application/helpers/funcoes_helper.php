<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function Verifica_Sessao(){
    //veridica se chave logado é false ou true

    if(userdata('logado')==false)
    { redirect('login'); }

}
?>