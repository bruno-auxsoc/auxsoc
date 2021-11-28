<?php

namespace App\Controllers;

use App\Models\MembroModel;
use App\Controllers\BaseController;

class Psicologo extends BaseController
{
    protected $mebroModel;

    public function __construct()
    {
        $this->membroModel = new MembroModel();
    }

    public function index()
    {
        $membros = $this->membroModel->findAll();


        //  para testar dados vindo do bd
        // dd($membros);

        $dados = [
            'membros' => $membros
        ];

        echo view('membros/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Membro'
        ];
        echo view('membros/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->membroModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Membro salvo com sucesso",
                'link' => [
                    'to' => 'membro',
                    'texto' => 'Voltar para Membros'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['membro_id']) ? 'Editar Membro' : 'Novo Membro',
                'errors' => $this->membroModel->errors()
            ];
            echo view('membros/form', $dados);
        }
    }




    public function editar($id)
    {
        $membro = $this->membroModel->getById($id);
        $dados = [
            'titulo' => 'Editar Membro',
            'membro' => $membro
        ];

        echo view('membros/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->membroModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Membro excluído com sucesso",
                'link' => [
                    'to' => 'membro',
                    'texto' => 'Voltar para Membros'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Membro",
                    'link' => [
                        'to' => 'membro',
                        'texto' => 'Voltar para Membros'
                    ]
                ]);
            }
        }
    }
}
