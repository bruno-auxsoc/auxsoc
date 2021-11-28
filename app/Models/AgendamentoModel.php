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
		'agendamento_tipo',
		'agendamento_data',
		'agendamento_hora',
		'agendamento_desc',
		'agendamento_status',
		'agendamento_solicitante',
		'psicologo_id',
		'assistente_id'
	];

	protected $validationRules = [
		'agendamento_tipo' => [
			'label' => 'Tipo',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'agendamento_data' => [
			'label' => 'Data',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'agendamento_hora' => [
			'label' => 'Hora',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'agendamento_desc' => [
			'label' => 'Descrição',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'agendamento_status' => [
			'label' => 'Status',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'agendamento_solicitante' => [
			'label' => 'Solicitante',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'psicologo_id' => [
			'label' => 'Psicólogo',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'assistente_id' => [
			'label' => 'Assistente',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];


	public function getAllWithPsicologoseAssistentes(){
		$this->select(
			"*"
		);
		$this->join('psicologos', 'psicologos.psicologo_id = agendamentos.psicologo_id');
		$this->join('assistentes', 'assistentes.assistente_id = agendamentos.assistente_id');
		return $this->findAll();
	}
	

}

?>