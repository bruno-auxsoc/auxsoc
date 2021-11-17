<?php

namespace App\Controllers;

use App\Models\AssistenteModel;
use App\Controllers\BaseController;

class Assistente extends BaseController
{
    protected $assistenteModel;

    public function __construct()
    {
        $this->assistenteModel = new AssistenteModel();
    }

    public function index()
    {
        $assistentes = $this->assistenteModel->findAll();


        //  para testar dados vindo do bd
        // dd($assistentes);

        $dados = [
            'assistentes' => $assistentes
        ];

        echo view('assistentes/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Assistente'
        ];
        echo view('assistentes/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->assistenteModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Assistente salvo com sucesso",
                'link' => [
                    'to' => 'assistente',
                    'texto' => 'Voltar para Assistentes'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['assistente_id']) ? 'Editar Assistente' : 'Novo Assistente',
                'errors' => $this->assistenteModel->errors()
            ];
            echo view('assistentes/form', $dados);
        }
    }




    public function editar($id)
    {
        $assistente = $this->assistenteModel->getById($id);
        $dados = [
            'titulo' => 'Editar Assistente',
            'Assistente' => $assistente
        ];

        echo view('assistentes/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->assistenteModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Assistente excluído com sucesso",
                'link' => [
                    'to' => 'assistente',
                    'texto' => 'Voltar para Assistentes'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao exclui o Assistente",
                    'link' => [
                        'to' => 'assistente',
                        'texto' => 'Voltar para Assistentes'
                    ]
                ]);
            }
        }
    }
}