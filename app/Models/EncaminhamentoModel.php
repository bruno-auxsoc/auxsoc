<?php

namespace App\Models;

class EncaminhamentoModel extends BaseModel
{

	protected $table = 'encaminhamentos';
	protected $primaryKey = 'encaminhamento_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'encaminhamento_id',
		'encaminhamento_tipo',
		'encaminhamento_desc',
		'atendimento_id'
	];

	protected $validationRules = [
		'encaminhamento_tipo' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]
	];

	public function getAllWithAtendimentos(){
		$this->select(
			"*"
		);
		$this->join('atendimentos', 'atendimentos.atendimento_id = encaminhamentos.atendimento_id');
		return $this->findAll();
	}

}

?>