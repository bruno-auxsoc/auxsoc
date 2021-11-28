<?php

namespace App\Controllers;

use App\Models\VisitaModel;
use App\Controllers\BaseController;
use App\Models\AssistenteModel;
use App\Models\FamiliaModel;
use App\Models\PsicologoModel;

class Visita extends BaseController
{
    protected $visitaModel;
    protected $psicologoModel;
    protected $assistenteModel;
    protected $familiaModel;

    public function __construct()
    {
        $this->visitaModel = new VisitaModel();
        $this->psicologoModel = new PsicologoModel();
        $this->assistenteModel = new AssistenteModel();
        $this->familiaModel = new FamiliaModel();
    }

    public function index()
    {
        $visitas = $this->visitaModel->getAllWithPsicologoseAssistenteseFamilias();


        //  para testar dados vindo do bd
        // dd($visitas);

        $dados = [
            'visitas' => $visitas
        ];

        echo view('visitas/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Visita',
            'psicologosDropDown' => $this->psicologoModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'assistentesDropDown' => $this->assistenteModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'familiasDropDown' => $this->familiaModel->formDropDown([
                'opcaoNova' => false
            ]
            )
        ];
        echo view('visitas/form', $dados);
    }

    // salva os dados vindos do formulario 
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->visitaModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Visita salva com sucesso",
                'link' => [
                    'to' => 'visita',
                    'texto' => 'Voltar para Visitas'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['visita_id']) ? 'Editar Visita' : 'Nova Visita',
                'errors' => $this->visitaModel->errors()
            ];
            echo view('visitas/form', $dados);
        }
    }

    public function editar($id)
    {
        $visita = $this->visitaModel->getById($id);
        $dados = [
            'titulo' => 'Editar Visita',
            'psicologosDropDown' => $this->psicologoModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'assistentesDropDown' => $this->assistenteModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'familiasDropDown' => $this->familiaModel->formDropDown([
                'opcaoNova' => false
            ]
            ),
            'visita' => $visita
        ];

        echo view('visitas/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->visitaModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Visita excluído com sucesso",
                'link' => [
                    'to' => 'visita',
                    'texto' => 'Voltar para Visitas'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir a Visita",
                    'link' => [
                        'to' => 'visita',
                        'texto' => 'Voltar para Visitas'
                    ]
                ]);
            }
        }
    }
}
