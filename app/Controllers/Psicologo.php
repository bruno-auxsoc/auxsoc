<?php

namespace App\Controllers;

use App\Models\PsicologoModel;

class Psicologo extends BaseController
{
    public function index()
    {
    	$psicologoModel = new PsicologoModel();

    	$psicologos = $psicologoModel ->findAll();


    	//  para testar dados vindo do bd
    	// dd($psicologos);

    	$dados = [
    		'psicologos' => $psicologos
    	];



        return view('psicologos/index', $dados);
    }

    public function incluir()
    {

    }

    public function editar()
    {
    	
    }

    
}
