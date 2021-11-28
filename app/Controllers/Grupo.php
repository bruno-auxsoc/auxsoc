<?php

namespace App\Controllers;

use App\Models\GrupoModel;
use App\Controllers\BaseController;

class Grupo extends BaseController
{
    protected $grupoModel;

    public function __construct()
    {
        $this->grupoModel = new GrupoModel();
    }

    public function index()
    {
        $grupos = $this->grupoModel->findAll();


        //  para testar dados vindo do bd
        // dd($grupos);

        $dados = [
            'grupos' => $grupos
        ];

        echo view('grupos/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Grupo'
        ];
        echo view('grupos/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->grupoModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Grupo salvo com sucesso",
                'link' => [
                    'to' => 'grupo',
                    'texto' => 'Voltar para Grupos'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['grupo_id']) ? 'Editar Grupo' : 'Novo Grupo',
                'errors' => $this->grupoModel->errors()
            ];
            echo view('grupos/form', $dados);
        }
    }




    public function editar($id)
    {
        $grupo = $this->grupoModel->getById($id);
        $dados = [
            'titulo' => 'Editar Grupo',
            'grupo' => $grupo
        ];

        echo view('grupos/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->grupoModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Grupo excluído com sucesso",
                'link' => [
                    'to' => 'grupo',
                    'texto' => 'Voltar para Grupos'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Grupo",
                    'link' => [
                        'to' => 'grupo',
                        'texto' => 'Voltar para Grupos'
                    ]
                ]);
            }
        }
    }
}