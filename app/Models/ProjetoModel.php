<?php

namespace App\Models;

class ProjetoModel extends BaseModel
{

	protected $table = 'projetos';
	protected $primaryKey = 'projeto_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'projeto_id',
		'projeto_nome',
	];

	protected $validationRules = [
		'projeto_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],


	];

}

?>