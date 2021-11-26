<?php

namespace App\Models;

class AgendamentoModel extends BaseModel
{

	protected $table = 'agendamentos';
	protected $primaryKey = 'agendamento_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'agendamento_id',
		'agendamento_nome',
		'agendamento_crp'
	];

	protected $validationRules = [
		'agendamento_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'agendamento_crp' => [
			'label' => 'CRP',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

}

?>