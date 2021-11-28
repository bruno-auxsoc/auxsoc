<?php

namespace App\Controllers;

use App\Models\EncaminhamentoModel;
use App\Controllers\BaseController;

class Encaminhamento extends BaseController
{
    protected $encaminhamentoModel;

    public function __construct()
    {
        $this->encaminhamentoModel = new EncaminhamentoModel();
    }

    public function index()
    {
        $encaminhamentos = $this->encaminhamentoModel->findAll();


        //  para testar dados vindo do bd
        // dd($encaminhamentos);

        $dados = [
            'encaminhamentos' => $encaminhamentos
        ];

        echo view('encaminhamentos/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Encaminhamento'
        ];
        echo view('encaminhamentos/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->encaminhamentoModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Encaminhamento salvo com sucesso",
                'link' => [
                    'to' => 'encaminhamento',
                    'texto' => 'Voltar para Encaminhamentos'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['encaminhamento_id']) ? 'Editar Encaminhamento' : 'Novo Encaminhamento',
                'errors' => $this->encaminhamentoModel->errors()
            ];
            echo view('encaminhamentos/form', $dados);
        }
    }

    public function editar($id)
    {
        $encaminhamento = $this->encaminhamentoModel->getById($id);
        $dados = [
            'titulo' => 'Editar Encaminhamento',
            'encaminhamento' => $encaminhamento
        ];

        echo view('encaminhamentos/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->encaminhamentoModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Encaminhamento excluído com sucesso",
                'link' => [
                    'to' => 'encaminhamento',
                    'texto' => 'Voltar para Encaminhamento'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Encaminhamento",
                    'link' => [
                        'to' => 'encaminhamento',
                        'texto' => 'Voltar para Encaminhamentos'
                    ]
                ]);
            }
        }
    }
}
