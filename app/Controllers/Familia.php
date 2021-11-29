<?php

namespace App\Controllers;

use App\Models\FamiliaModel;
use App\Controllers\BaseController;

class Familia extends BaseController
{
    protected $familiaModel;

    public function __construct()
    {
        $this->familiaModel = new FamiliaModel();
    }

    public function index()
    {
        $familias = $this->familiaModel->findAll();


        //  para testar dados vindo do bd
        // dd($familias);

        $dados = [
            'familias' => $familias
        ];

        echo view('familias/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Nova Família'
        ];
        echo view('familias/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->familiaModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Família salva com sucesso",
                'link' => [
                    'to' => 'familia',
                    'texto' => 'Voltar para Famílias'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['familia_id']) ? 'Editar Família' : 'Nova Família',
                'errors' => $this->familiaModel->errors()
            ];
            echo view('familias/form', $dados);
        }
    }




    public function editar($id)
    {
        $familia = $this->familiaModel->getById($id);
        $dados = [
            'titulo' => 'Editar Família',
            'familia' => $familia
        ];

        echo view('familias/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->familiaModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Família excluída com sucesso",
                'link' => [
                    'to' => 'familia',
                    'texto' => 'Voltar para Famílias'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir a Família",
                    'link' => [
                        'to' => 'familia',
                        'texto' => 'Voltar para Famílias'
                    ]
                ]);
            }
        }
    }
}
