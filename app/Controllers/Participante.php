<?php

namespace App\Controllers;

use App\Models\ParticipanteModel;
use App\Controllers\BaseController;

class Participante extends BaseController
{
    protected $participanteModel;

    public function __construct()
    {
        $this->participanteModel = new ParticipanteModel();
    }

    public function index()
    {
        $participantes = $this->participanteModel->findAll();


        //  para testar dados vindo do bd
        // dd($participantes);

        $dados = [
            'participantes' => $participantes
        ];

        echo view('participantes/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Participante'
        ];
        echo view('participantes/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->participanteModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Participante salvo com sucesso",
                'link' => [
                    'to' => 'participante',
                    'texto' => 'Voltar para Participantes'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['participante_id']) ? 'Editar Participante' : 'Novo Participante',
                'errors' => $this->participanteModel->errors()
            ];
            echo view('participantes/form', $dados);
        }
    }




    public function editar($id)
    {
        $participante = $this->participanteModel->getById($id);
        $dados = [
            'titulo' => 'Editar Participante',
            'participante' => $participante
        ];

        echo view('participantes/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->participanteModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Participante excluído com sucesso",
                'link' => [
                    'to' => 'participante',
                    'texto' => 'Voltar para Participantes'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Participante",
                    'link' => [
                        'to' => 'participante',
                        'texto' => 'Voltar para Participantes'
                    ]
                ]);
            }
        }
    }
}