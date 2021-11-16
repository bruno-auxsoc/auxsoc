<?php

namespace App\Models;

class AssistenteModel extends BaseModel
{

	protected $table = 'assistentes';
	protected $primaryKey = 'assistente_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'assistente_id',
		'assistente_nome',
		'assistente_cress'
	];

	protected $validationRules = [
		'assistente_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'assistente_cress' => [
			'label' => 'CRP',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

}

?>