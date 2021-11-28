<?php

namespace App\Controllers;

use App\Models\AgendamentoModel;
use App\Models\FamiliaModel;

class Dashboard extends BaseController
{
    protected $familiaModel;
    protected $agendamentoModel;
    

    public function __construct()
    {
        $this->familiaModel = new FamiliaModel();
        $this->agendamentoModel = new AgendamentoModel();
    }

    public function index()
    {
        $familias = $this->familiaModel->findAll();
        $agendamentos = $this->agendamentoModel->findAll();


        //  para testar dados vindo do bd
        // dd($familias);

        $dados = [
            'familias' => $familias,
            'agendamentos' => $agendamentos
        ];
        return view('dashboard/index', $dados);
    }

    
}
