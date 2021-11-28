<?php

namespace App\Models;

class AtendimentoModel extends BaseModel
{

	protected $table = 'atendimentos';
	protected $primaryKey = 'atendimento_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'atendimento_id',
		'assistente_id',
		'psicologo_id',
		'membro_id',
		'atendimento_data',
		'atendimento_hora',
		'atendimento_desc'
	];

	protected $validationRules = [
		'atendimento_data' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'atendimento_hora' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

}

?>