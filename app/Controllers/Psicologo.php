<?php

namespace App\Controllers;

use App\Models\PsicologoModel;

class Psicologo extends BaseController
{
    public function index()
    {
    	$psicologoModel = new PsicologoModel();

    	$psicologos = $psicologoModel ->findAll();

    	echo "<pre>";
    	print_r($psicologos);
    	echo "</pre>";


        return view('psicologos/index');
    }

    
}
