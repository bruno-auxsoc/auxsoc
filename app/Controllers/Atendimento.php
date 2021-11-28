<?php

namespace App\Controllers;

use App\Models\AtendimentoModel;
use App\Controllers\BaseController;
use App\Models\AssistenteModel;
use App\Models\MembroModel;
use App\Models\PsicologoModel;

class Atendimento extends BaseController
{
    protected $atendimentoModel;
    protected $psicologoModel;
    protected $assistenteModel;
    protected $membroModel;

    public function __construct()
    {
        $this->atendimentoModel = new AtendimentoModel();
        $this->psicologoModel = new PsicologoModel();
        $this->assistenteModel = new AssistenteModel();
        $this->membroModel = new MembroModel();
    }

    public function index()
    {
        $atendimentos = $this->atendimentoModel->getAllWithPsicologoseAssistenteseMembros();


        //  para testar dados vindo do bd
        // dd($atendimentos);

        $dados = [
            'atendimentos' => $atendimentos
        ];

        echo view('atendimentos/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Atendimento',
            'psicologosDropDown' => $this->psicologoModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'assistentesDropDown' => $this->assistenteModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'membrosDropDown' => $this->membroModel->formDropDown([
                'opcaoNova' => false
            ]
            )
        ];
        echo view('atendimentos/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->atendimentoModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Atendimento salvo com sucesso",
                'link' => [
                    'to' => 'atendimento',
                    'texto' => 'Voltar para Atendimentos'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['atendimento_id']) ? 'Editar Atendimento' : 'Novo Atendimento',
                'errors' => $this->atendimentoModel->errors()
            ];
            echo view('atendimentos/form', $dados);
        }
    }

    public function editar($id)
    {
        $atendimento = $this->atendimentoModel->getById($id);
        $dados = [
            'titulo' => 'Editar Atendimento',
            'psicologosDropDown' => $this->psicologoModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'assistentesDropDown' => $this->assistenteModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'membrosDropDown' => $this->membroModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'atendimento' => $atendimento
        ];

        echo view('atendimentos/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->atendimentoModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Atendimento excluído com sucesso",
                'link' => [
                    'to' => 'atendimento',
                    'texto' => 'Voltar para Atendimentos'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Atendimento",
                    'link' => [
                        'to' => 'atendimento',
                        'texto' => 'Voltar para Atendimentos'
                    ]
                ]);
            }
        }
    }
}
