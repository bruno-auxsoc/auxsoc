<?php

namespace App\Models;

class ProgramaModel extends BaseModel
{

	protected $table = 'programas';
	protected $primaryKey = 'programa_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'programa_id',
		'programa_nome'
	];

	protected $validationRules = [
		'programa_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
	];

}

?>