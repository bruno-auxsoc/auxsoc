<?php namespace App\Controllers;

class Login extends BaseController{

    protected $usuarioModel;
    protected $ga;
    protected $recoveryCodesModel;
    protected $validation;


    public function __construct()
    {
        // $this->usuarioModel = new UsuarioModel();
        // $this->recoveryCodesModel = new RecoveryCodesModel();
        // $this->ga = new GoogleAutenticator();
        // $this->validation = new \Config\Services::validation();

    }


    public function index(){
        echo view('login/index');
    }

    public function signin(){
        $post = $this->request->getPost();
        $validationRules = [
            'usuario_email' => [
                'label' => 'E-mail',
                'rules' => 'required|valid_email'
            ],
            'usuario_senha' => [
                'label' => 'Senha',
                'rules' => 'required'

            ],

        ];

    }
}

?>