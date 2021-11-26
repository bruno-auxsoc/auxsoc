<?php

namespace App\Controllers;

use App\Models\ProgramaModel;
use App\Controllers\BaseController;

class Programa extends BaseController
{
    protected $programaModel;

    public function __construct()
    {
        $this->programaModel = new ProgramaModel();
    }

    public function index()
    {
        $programas = $this->programaModel->findAll();


        //  para testar dados vindo do bd
        // dd($programas);

        $dados = [
            'programas' => $programas
        ];

        echo view('programas/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Programa'
        ];
        echo view('programas/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->programaModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Programa salvo com sucesso",
                'link' => [
                    'to' => 'programa',
                    'texto' => 'Voltar para Programas'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['programa_id']) ? 'Editar Programa' : 'Novo Programa',
                'errors' => $this->programaModel->errors()
            ];
            echo view('programa/form', $dados);
        }
    }




    public function editar($id)
    {
        $programa = $this->programaModel->getById($id);
        $dados = [
            'titulo' => 'Editar Programa',
            'programa' => $programa
        ];

        echo view('programas/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->programaModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Programa excluído com sucesso",
                'link' => [
                    'to' => 'programa',
                    'texto' => 'Voltar para Programas'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Programa",
                    'link' => [
                        'to' => 'programa',
                        'texto' => 'Voltar para Programas'
                    ]
                ]);
            }
        }
    }
}