<?php

namespace App\Controllers;

use App\Models\VisitaModel;
use App\Controllers\BaseController;

class Visita extends BaseController
{
    protected $visitaModel;

    public function __construct()
    {
        $this->visitaModel = new VisitaModel();
    }

    public function index()
    {
        $visitas = $this->visitaModel->findAll();


        //  para testar dados vindo do bd
        // dd($visitas);

        $dados = [
            'visitas' => $visitas
        ];

        echo view('visitas/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Visita'
        ];
        echo view('visitas/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->visitaModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Visita salva com sucesso",
                'link' => [
                    'to' => 'visita',
                    'texto' => 'Voltar para Visitas'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['visita_id']) ? 'Editar Visita' : 'Nova Visita',
                'errors' => $this->visitaModel->errors()
            ];
            echo view('visitas/form', $dados);
        }
    }

    public function editar($id)
    {
        $visita = $this->visitaModel->getById($id);
        $dados = [
            'titulo' => 'Editar Visita',
            'visita' => $visita
        ];

        echo view('visitas/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->visitaModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Visita excluído com sucesso",
                'link' => [
                    'to' => 'visita',
                    'texto' => 'Voltar para Visitas'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir a Visita",
                    'link' => [
                        'to' => 'visita',
                        'texto' => 'Voltar para Visitas'
                    ]
                ]);
            }
        }
    }
}
