<?php

namespace App\Models;

class GrupoModel extends BaseModel
{

	protected $table = 'grupos';
	protected $primaryKey = 'grupo_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'grupo_id',
		'projeto_id',
		'grupo_nome',
		'grupo_periodo',
		'grupo_max_pessoas',
		'grupo_nro_encontros',
		'grupo_oficineiro',
	];

	protected $validationRules = [
		'grupo_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'grupo_periodo' => [
			'label' => 'Período',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'grupo_oficineiro' => [
			'label' => 'Oficineiro',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

	public function formDropDown(array $params = null, array $order = null)
	{
		$this->select('grupo_id, grupo_nome');

		if (!is_null($params) && isset($params['grupo_id'])){
			$this->where(['grupo_id' => $params['grupo_id']]);

		}

		$gruposArray = $this->findAll();

		$optionsGrupos = array_column($gruposArray, 'grupo_nome', 'grupo_id');

		$optionsSelecione = [
			'' => 'Selecione...'
		];

		$selectConteudo = $optionsSelecione + $optionsGrupos;

		$novoGrupo = [];

		if(!is_null($params) && isset($params['opcaoNova'])){
			if((bool)$params['opcaoNova'] === true){
				$novoGrupo = [
					'---' => [
						'n' => 'Novo Grupo...'
					]
					];
			}
		}

		$result = $selectConteudo + $novoGrupo;
		

		return $result;
	}


	public function getAllWithProjetos(){
		$this->select(
			"*"
		);
		$this->join('projetos', 'projetos.projeto_id = grupos.projeto_id');
		return $this->findAll();
	}


}

?>