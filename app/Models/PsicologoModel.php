<?php

namespace App\Models;

class PsicologoModel extends BaseModel
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
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'psicologo_crp' => [
			'label' => 'CRP',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

	public function formDropDown(array $params = null, array $order = null)
	{
		$this->select('psicologo_id, psicologo_nome');

		if (!is_null($params) && isset($params['psicologo_id'])){
			$this->where(['psicologo_id' => $params['psicologo_id']]);

		}

		$psicologosArray = $this->findAll();

		$optionsPsicologos = array_column($psicologosArray, 'psicologo_nome', 'psicologo_id');

		$optionsSelecione = [
			'' => 'Selecione...'
		];

		$selectConteudo = $optionsSelecione + $optionsPsicologos;

		$novoPsicologo = [];

		if(!is_null($params) && isset($params['opcaoNova'])){
			if((bool)$params['opcaoNova'] === true){
				$novoPsicologo = [
					'---' => [
						'n' => 'Novo Psicologo...'
					]
					];
			}
		}

		$result = $selectConteudo + $novoPsicologo;

		return $result;
	}


}

?>