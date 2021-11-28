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
		'visita_data',
		'visita_hora',
		'visita_desc'
	];

	protected $validationRules = [
		'visita_data' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'visita_hora' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

}

?>