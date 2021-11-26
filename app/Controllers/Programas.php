<?php

namespace App\Controllers;

use App\Models\ProgramasModel;
use App\Controllers\BaseController;

class Programas extends BaseController
{
    protected $programasModel;

    public function __construct()
    {
        $this->programasModel = new ProgramasModel();
    }

    public function index()
    {
        $programas = $this->programasModel->findAll();


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

        if ($this->programasModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Programa salvo com sucesso",
                'link' => [
                    'to' => 'programas',
                    'texto' => 'Voltar para Programas'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['programas_id']) ? 'Editar Programas' : 'Novo Programa',
                'errors' => $this->programasModel->errors()
            ];
            echo view('programas/form', $dados);
        }
    }




    public function editar($id)
    {
        $programas = $this->programasModel->getById($id);
        $dados = [
            'titulo' => 'Editar Programas',
            'programas' => $programas
        ];

        echo view('programas/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->programasModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Programa excluído com sucesso",
                'link' => [
                    'to' => 'programas',
                    'texto' => 'Voltar para Programas'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Programas",
                    'link' => [
                        'to' => 'programas',
                        'texto' => 'Voltar para Programas'
                    ]
                ]);
            }
        }
    }
}