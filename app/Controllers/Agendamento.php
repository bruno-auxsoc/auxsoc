<?php

namespace App\Controllers;

use App\Models\AgendamentoModel;
use App\Controllers\BaseController;
use App\Models\PsicologoModel;
use App\Models\AssistenteModel;

class Agendamento extends BaseController
{
    protected $agendamentoModel;
    protected $psicologoModel;
    protected $assistenteModel;

    public function __construct()
    {
        $this->agendamentoModel = new AgendamentoModel();
        $this->psicologoModel = new PsicologoModel();
        $this->assistenteModel = new AssistenteModel();

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
            'titulo' => 'Novo Agendamento',
            'psicologosDropDown' => $this->psicologoModel->formDropDown([
                'opcaoNova' => true
            ]
            ),
            'assistentesDropDown' => $this->assistenteModel->formDropDown([
                'opcaoNova' => true
            ]
            )
            
            
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
                'errors' => $this->agendamentoModel->errors(),
                'formDropDown' => $this->psicologoModel->formDropDown([
                    'opcaoNova' => true
                ]
                )
            ];
            echo view('agendamentos/form', $dados);
        }
    }




    public function editar($id)
    {
        $agendamento = $this->agendamentoModel->getById($id);
        if(!is_null($agendamento)){

            $dados = [
                'titulo' => 'Editar Agendamento',
                'psicologosDropDown' => $this->psicologoModel->formDropDown([
                    'opcaoNova' => true
                ]
                ),
                'assistentesDropDown' => $this->assistenteModel->formDropDown([
                    'opcaoNova' => true
                ]
                ),
                'agendamento' => $agendamento
            ];
    
            echo view('agendamentos/form', $dados);

        }

        else { 
            return redirect()->to('mensagem/erro')->with('mensagem', [
                'mensagem' => "Agendamento não encontrado",
                'link' => [
                    'to' => 'agendamento',
                    'texto' => 'Voltar para Agendamentos'
                ]
            ]);
        
    }
        
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
        } else { 
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
