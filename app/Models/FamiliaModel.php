<?php

namespace App\Models;

class FamiliaModel extends BaseModel
{

	protected $table = 'familias';
	protected $primaryKey = 'familia_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'familia_id',
		'familia_responsavel',
		'familia_inclusao_paif',
        'familia_exclusao_paif',
        'familia_endereco',
        'familia_nro',
        'familia_complemento',
        'familia_bairro',
        'familia_cidade',
        'familia_estado',
        'familia_telefone'
	];

	protected $validationRules = [
		'familia_responsavel' => [
			'label' => 'Responsável',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'familia_inclusao_paif' => [
			'label' => 'Inclusão PAIF',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
        'familia_endereco' => [
			'label' => 'Endereço',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
        'familia_nro' => [
			'label' => 'Nº',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
        'familia_bairro' => [
			'label' => 'Bairro',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
        'familia_telefone' => [
			'label' => 'Telefone',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
        

	];

	public function formDropDown(array $params = null, array $order = null)
	{
		$this->select('familia_id, familia_responsavel');

		if (!is_null($params) && isset($params['familia_id'])){
			$this->where(['familia_id' => $params['familia_id']]);

		}

		$familiasArray = $this->findAll();

		$optionsFamilias = array_column($familiasArray, 'familia_responsavel', 'familia_id');

		$optionsSelecione = [
			'' => 'Selecione...'
		];

		$selectConteudo = $optionsSelecione + $optionsFamilias;

		$novaFamilia = [];

		if(!is_null($params) && isset($params['opcaoNova'])){
			if((bool)$params['opcaoNova'] === true){
				$novaFamilia = [
					'---' => [
						'n' => 'Nova Familia...'
					]
					];
			}
		}

		$result = $selectConteudo + $novaFamilia;

		return $result;
	}


}

?>