<?php

namespace App\Models;

class VisitaModel extends BaseModel
{

	protected $table = 'visitas';
	protected $primaryKey = 'visita_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'visita_id',
		'assistente_id',
		'psicologo_id',
		'familia_id',
		'visita_data',
		'visita_hora',
		'visita_desc'
	];

	protected $validationRules = [
		'familia_id' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'visita_data' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];



	public function getAllWithPsicologoseAssistenteseFamilias(){
		$this->select(
			"*"
		);
		$this->join('psicologos', 'psicologos.psicologo_id = visitas.psicologo_id');
		$this->join('assistentes', 'assistentes.assistente_id = visitas.assistente_id');
		$this->join('familias', 'familias.familia_id = visitas.familia_id');
		return $this->findAll();
	}



}

?>