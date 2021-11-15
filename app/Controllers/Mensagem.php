<?php

namespace App\Controllers;

class Mensagem extends BaseController
{
    public function sucesso()
    {
        $mensagem = $this->session->getFlashdata('mensagem');

        if (is_array($mensagem)) {

            echo view('templates/mensagens/sucesso', [
                'mensagem' => $mensagem['mensagem'],
                'link' => anchor($mensagem['link']['to'], $mensagem['link']['texto'], ['class' => 'nav-link'])
            ]);
        } else {
            echo view('templates/mensagens/sucesso', [
                'mensagem' => $mensagem['mensagem'],
                'link' => anchor(base_url(), 'Dashboard', ['class' => 'nav-link'])
            ]);
        }
    }


    public function erro()
    {
        $mensagem = $this->session->getFlashdata('mensagem');

        if (is_array($mensagem)) {

            echo view('templates/mensagens/erro', [
                'mensagem' => $mensagem['mensagem'],
                'link' => anchor($mensagem['link']['to'], $mensagem['link']['texto'], ['class' => 'nav-link'])
            ]);
        } else {
            echo view('templates/mensagens/erro', [
                'mensagem' => $mensagem['mensagem'],
                'link' => anchor(base_url(), 'Dashboard', ['class' => 'nav-link'])
            ]);
        }
    }


}

?>