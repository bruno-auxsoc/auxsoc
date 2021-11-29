<?php

namespace App\Controllers;

use App\Models\EncaminhamentoModel;
use App\Models\AtendimentoModel;
use App\Controllers\BaseController;

class Encaminhamento extends BaseController
{
    protected $encaminhamentoModel;
    protected $atendimentoModel;

    public function __construct()
    {
        $this->encaminhamentoModel = new EncaminhamentoModel();
        $this->atendimentoModel = new AtendimentoModel();
    }

    public function index()
    {
        $encaminhamentos = $this->encaminhamentoModel->getAllWithAtendimentos();


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
            'titulo' => 'Novo Encaminhamento',
            'atendimentosDropDown' => $this->atendimentoModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
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
                'errors' => $this->encaminhamentoModel->errors(),
                'atendimentosDropDown' => $this->encaminhamentoModel->formDropDown([
                    'opcaoNova' => false
                ]
                )
            ];
        }
    }

    public function editar($id)
    {
        $encaminhamento = $this->encaminhamentoModel->getById($id);
        if(!is_null($encaminhamento)){

            $dados = [
                'titulo' => 'Editar Encaminhamento',
                'atendimentosDropDown' => $this->encaminhamentoModel->formDropDown([
                    'opcaoNova' => true
                ]
                ),
                'encaminhamento' => $encaminhamento
            ];
    
            echo view('encaminhamentos/form', $dados);

        }

        else { 
            return redirect()->to('mensagem/erro')->with('mensagem', [
                'mensagem' => "Encaminhamento não encontrado",
                'link' => [
                    'to' => 'encaminhamento',
                    'texto' => 'Voltar para Encaminhamentos'
                ]
            ]);
        
        }
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
