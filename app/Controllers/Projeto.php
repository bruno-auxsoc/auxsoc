<?php

namespace App\Controllers;

use App\Models\ProjetoModel;
use App\Controllers\BaseController;

class Projeto extends BaseController
{
    protected $projetoModel;

    public function __construct()
    {
        $this->projetoModel = new ProjetoModel();
    }

    public function index()
    {
        $projetos = $this->projetoModel->findAll();


        //  para testar dados vindo do bd
        // dd($projetos);

        $dados = [
            'projetos' => $projetos
        ];

        echo view('projetos/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Projeto'
        ];
        echo view('projetos/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->projetooModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Projeto salvo com sucesso",
                'link' => [
                    'to' => 'projeto',
                    'texto' => 'Voltar para Projetos'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['projeto_id']) ? 'Editar Projeto' : 'Novo Projeto',
                'errors' => $this->projetoModel->errors()
            ];
            echo view('projetos/form', $dados);
        }
    }




    public function editar($id)
    {
        $projeto = $this->projetoModel->getById($id);
        $dados = [
            'titulo' => 'Editar Projeto',
            'projeto' => $projeto
        ];

        echo view('projetos/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->projetoModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Projeto excluído com sucesso",
                'link' => [
                    'to' => 'projeto',
                    'texto' => 'Voltar para Projetos'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Projeto",
                    'link' => [
                        'to' => 'projeto',
                        'texto' => 'Voltar para Projetos'
                    ]
                ]);
            }
        }
    }
}
