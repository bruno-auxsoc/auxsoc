<?php

namespace App\Controllers;

use App\Models\EncontroModel;
use App\Controllers\BaseController;
use App\Models\GrupoModel;
use App\Models\ParticipanteModel;

class Encontro extends BaseController
{
    protected $encontroModel;
    protected $participanteModel;
    protected $grupoModel;


    public function __construct()
    {
        $this->encontroModel = new EncontroModel();
        $this->participanteModel = new ParticipanteModel();
        $this->grupoModel = new GrupoModel();
    }

    public function index()
    {
        $encontros = $this->encontroModel->getAllWithParticipanteseGrupos();


        //  para testar dados vindo do bd
        // dd($encontros);

        $dados = [
            'encontros' => $encontros
        ];

        echo view('encontros/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Encontro',
            'participantesDropDown' => $this->participanteModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'gruposDropDown' => $this->grupoModel->formDropDown([
                'opcaoNova' => false
            ]
            )
        ];
        echo view('encontros/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->encontroModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Encontro salvo com sucesso",
                'link' => [
                    'to' => 'encontro',
                    'texto' => 'Voltar para Encontro'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['encontro_id']) ? 'Editar Encontro' : 'Novo Encontro',
                'errors' => $this->encontroModel->errors()
            ];
            echo view('encontros/form', $dados);
        }
    }




    public function editar($id)
    {
        $encontro = $this->encontroModel->getById($id);
        $dados = [
            'titulo' => 'Editar Encontro',
            'participantesDropDown' => $this->participanteModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'gruposDropDown' => $this->grupoModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'encontro' => $encontro
        ];

        echo view('encontros/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->encontroModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Encontro excluído com sucesso",
                'link' => [
                    'to' => 'encontro',
                    'texto' => 'Voltar para Encontros'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Encontro",
                    'link' => [
                        'to' => 'encontro',
                        'texto' => 'Voltar para Encontros'
                    ]
                ]);
            }
        }
    }
}