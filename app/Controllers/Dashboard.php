<?php

namespace App\Controllers;

use App\Models\AgendamentoModel;
use App\Models\AtendimentoModel;
use App\Models\FamiliaModel;
use App\Models\VisitaModel;

class Dashboard extends BaseController
{
    protected $familiaModel;
    protected $agendamentoModel;
    protected $atendimentoModel;
    protected $visitaModel;
    

    public function __construct()
    {
        $this->familiaModel = new FamiliaModel();
        $this->agendamentoModel = new AgendamentoModel();
        $this->atendimentoModel = new AtendimentoModel();
        $this->visitaModel = new VisitaModel();
    }

    public function index()
    {
        $familias = $this->familiaModel->findAll();
        $agendamentos = $this->agendamentoModel->findAll();
        $atendimentos = $this->atendimentoModel->findAll();
        $visitas = $this->visitaModel->findAll();


        //  para testar dados vindo do bd
        // dd($familias);

        $dados = [
            'familias' => $familias,
            'agendamentos' => $agendamentos,
            'atendimentos' => $atendimentos,
            'visitas' => $visitas
        ];
        return view('dashboard/index', $dados);
    }

    
}
