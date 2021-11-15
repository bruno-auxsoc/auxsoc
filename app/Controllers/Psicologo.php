<?php

namespace App\Controllers;

use App\Models\PsicologoModel;
use App\Controllers\BaseController;

class Psicologo extends BaseController
{
    protected $psicologoModel;

    public function __construct()
    {
        $this->psicologoModel = new PsicologoModel();
    }

    public function index()
    {
        $psicologos = $this->psicologoModel->findAll();


        //  para testar dados vindo do bd
        // dd($psicologos);

        $dados = [
            'psicologos' => $psicologos
        ];

        echo view('psicologos/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Psicólogo'
        ];
        echo view('psicologos/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();




        if ($this->psicologoModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Psicólogo salvo com sucesso",
                'link' => [
                    'to' => 'psicologo',
                    'texto' => 'Voltar para Psicólogos'
                ]
            ]);
        } else {
            $dados = [
                'titulo'=> !empty($post['psicologo_id']) ? 'Editar Psicólogo': 'Novo Psicólogo',
                'errors' => $this->psicologoModel->errors()
            ];
            echo view('psicologos/form', $dados);
        }
    }

    public function editar($id)
    {
        $psicologo = $this->psicologoModel->getById($id);
        $dados = [
            'titulo'=> !empty($post['psicologo_id']) ? 'Editar Psicólogo': 'Novo Psicólogo',
            'errors' => $this->psicologoModel->errors()
        ];

        echo view('psicologos/form', $dados);
    }

}
