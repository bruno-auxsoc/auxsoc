<?php

namespace App\Models;

class ProgramasModel extends BaseModel
{

	protected $table = 'programas';
	protected $primaryKey = 'programas_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'programas_id',
	];

	protected $validationRules = [
		'programas_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
	];

}

?>