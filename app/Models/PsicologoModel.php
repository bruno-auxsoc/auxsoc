<?php namespace App\Models;

use Codeigniter\Model;


class PsicologoModel extends Model
{

	protected $table = 'psicologos';
	protected $primaryKey = 'psicologo_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'psicologo_id',
		'psicologo_nome',
		'psicologo_crp'
	];

	protected $validationRules = [
		'psicologo_nome' => [
			'label' => 'Nome',
			'rules' => 'required'
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'psicologo_crp' => [
			'label' => 'CRP',
			'rules' => 'required'
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

}

?>