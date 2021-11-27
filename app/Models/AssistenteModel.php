<?php

namespace App\Models;

class AssistenteModel extends BaseModel
{

	protected $table = 'assistentes';
	protected $primaryKey = 'assistente_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'assistente_id',
		'assistente_nome',
		'assistente_cress'
	];

	protected $validationRules = [
		'assistente_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'assistente_cress' => [
			'label' => 'CRESS',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];


	public function formDropDown(array $params = null, array $order = null)
	{
		$this->select('assistente_id, assistente_nome');

		if (!is_null($params) && isset($params['assistente_id'])){
			$this->where(['assistente_id' => $params['assistente_id']]);

		}

		$assistentesArray = $this->findAll();

		$optionsAssistentes = array_column($assistentesArray, 'assistente_nome', 'assistente_id');

		$optionsSelecione = [
			'' => 'Selecione...'
		];

		$selectConteudo = $optionsSelecione + $optionsAssistentes;

		$novoAssistente = [];

		if(!is_null($params) && isset($params['opcaoNova'])){
			if((bool)$params['opcaoNova'] === true){
				$novoAssistente = [
					'---' => [
						'n' => 'Novo Assistente...'
					]
					];
			}
		}

		$result = $selectConteudo + $novoAssistente;

		return $result;
	}




}

?>