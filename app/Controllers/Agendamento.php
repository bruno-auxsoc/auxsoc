<?php

namespace App\Controllers;

use App\Models\AgendamentoModel;
use App\Controllers\BaseController;

class Agendamento extends BaseController
{
    protected $agendamentoModel;

    public function __construct()
    {
        $this->agendamentoModel = new AgendamentoModel();
    }

    public function index()
    {
        $agendamentos = $this->agendamentoModel->findAll();


        //  para testar dados vindo do bd
        // dd($agendamentos);

        $dados = [
            'agendamentos' => $agendamentos
        ];

        echo view('agendamentos/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Agendamento'
        ];
        echo view('agendamentos/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->agendamentoModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Agendamento salvo com sucesso",
                'link' => [
                    'to' => 'agendamento',
                    'texto' => 'Voltar para Agendamentos'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['agendamento_id']) ? 'Editar Agendamento' : 'Novo Agendamento',
                'errors' => $this->agendamentoModel->errors()
            ];
            echo view('agendamentos/form', $dados);
        }
    }




    public function editar($id)
    {
        $agendamento = $this->agendamentoModel->getById($id);
        $dados = [
            'titulo' => 'Editar Agendamento',
            'agendamento' => $agendamento
        ];

        echo view('agendamentos/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->agendamentoModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Agendamento excluído com sucesso",
                'link' => [
                    'to' => 'agendamento',
                    'texto' => 'Voltar para Agendamentos'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Agendamento",
                    'link' => [
                        'to' => 'agendamento',
                        'texto' => 'Voltar para Agendamentos'
                    ]
                ]);
            }
        }
    }
}
