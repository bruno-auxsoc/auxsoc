<?php

namespace App\Models;

class MembroModel extends BaseModel
{

	protected $table = 'membros';
	protected $primaryKey = 'membro_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'membro_id',
		'membro_nome',
		'membro_nis',
		'membro_cpf',
		'membro_dn',
		'membro_tipo',
	];

	protected $validationRules = [
		'membro_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'membro_nis' => [
			'label' => 'NIS',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

		'membro_cpf' => [
			'label' => 'CPF',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'membro_dn' => [
			'label' => 'Data',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'membro_tipo' => [
			'label' => 'Tipo',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]
	];

}

?>