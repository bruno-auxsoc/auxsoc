<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Controllers\BaseController;

class Usuario extends BaseController
{
    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        $usuarios = $this->usuarioModel->findAll();


        //  para testar dados vindo do bd
        // dd($usuarios);

        $dados = [
            'usuarios' => $usuarios
        ];

        echo view('usuarios/index', $dados);
    }

    public function incluir()
    {
        $dados = [
            'titulo' => 'Novo Usuário'
        ];
        echo view('usuarios/form', $dados);
    }

    // salva os dados vindos do formulario
    public function salvar()
    {
        $post = $this->request->getPost();

        if ($this->usuarioModel->save($post)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Usuário salvo com sucesso",
                'link' => [
                    'to' => 'usuario',
                    'texto' => 'Voltar para Usuários'
                ]
            ]);
        } else {
            $dados = [
                'titulo' => !empty($post['usuario_id']) ? 'Editar Usuário' : 'Novo Usuário',
                'errors' => $this->usuarioModel->errors()
            ];
            echo view('usuarios/form', $dados);
        }
    }




    public function editar($id)
    {
        $usuario = $this->usuarioModel->getById($id);
        $dados = [
            'titulo' => 'Editar Usuário',
            'usuario' => $usuario
        ];

        echo view('usuarios/form', $dados);
    }




    public function excluir($id = null)
    {
        if ($this->usuarioModel->delete($id)) {
            return redirect()->to('mensagem/sucesso')->with('mensagem', [
                'mensagem' => "Usuário excluído com sucesso",
                'link' => [
                    'to' => 'usuario',
                    'texto' => 'Voltar para Usuários'
                ]
            ]);
        } else { {
                return redirect()->to('mensagem/erro')->with('mensagem', [
                    'mensagem' => "Erro ao excluir o Usuário",
                    'link' => [
                        'to' => 'usuario',
                        'texto' => 'Voltar para Usuários'
                    ]
                ]);
            }
        }
    }
}
