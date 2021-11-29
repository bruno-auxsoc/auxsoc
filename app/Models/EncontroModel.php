<?php

namespace App\Models;

class EncontroModel extends BaseModel
{

	protected $table = 'encontros';
	protected $primaryKey = 'encontro_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'encontro_id',
		'participante_id',
		'grupo_id',
		'encontro_data',
	];

	protected $validationRules = [
		'participante_id' => [
			'label' => 'Participante',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'grupo_id' => [
			'label' => 'Grupo',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'encontro_data' => [
			'label' => 'Data',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]
	];

	public function formDropDown(array $params = null, array $order = null)
	{
		$this->select('encontro_id, encontro_nome');

		if (!is_null($params) && isset($params['encontro_id'])){
			$this->where(['encontro_id' => $params['encontro_id']]);

		}

		$encontrosArray = $this->findAll();

		$optionsEncontros = array_column($encontrosArray, 'encontro_nome', 'encontro_id');

		$optionsSelecione = [
			'' => 'Selecione...'
		];

		$selectConteudo = $optionsSelecione + $optionsEncontros;

		$novoEncontro = [];

		if(!is_null($params) && isset($params['opcaoNova'])){
			if((bool)$params['opcaoNova'] === true){
				$novoEncontro = [
					'---' => [
						'n' => 'Novo Encontro...'
					]
					];
			}
		}

		$result = $selectConteudo + $novoEncontro;

		return $result;
	}

	public function getAllWithParticipanteseGrupos(){
		$this->select(
			"*"
		);
		$this->join('participantes', 'participantes.participante_id = encontros.participante_id');
		$this->join('grupos', 'grupos.grupo_id = encontros.grupo_id');
		return $this->findAll();
	}


}

?>