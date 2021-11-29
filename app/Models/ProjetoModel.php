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
		'projeto_desc',
		'projeto_publico_desc',
		'projeto_orientador'
	];

	protected $validationRules = [
		'projeto_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'projeto_desc' => [
			'label' => 'Descrição',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'projeto_orientador' => [
			'label' => 'Orientador',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],

		'projeto_publico_desc' => [
			'label' => 'Descrição do Público',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]



];


public function formDropDown(array $params = null, array $order = null)
{
	$this->select('projeto_id, projeto_nome');

	if (!is_null($params) && isset($params['projeto_id'])){
		$this->where(['projeto_id' => $params['projeto_id']]);

	}

	$projetosArray = $this->findAll();

	$optionsProjetos = array_column($projetosArray, 'projeto_nome', 'projeto_id');

	$optionsSelecione = [
		'' => 'Selecione...'
	];

	$selectConteudo = $optionsSelecione + $optionsProjetos;

	$novoProjeto = [];

	if(!is_null($params) && isset($params['opcaoNova'])){
		if((bool)$params['opcaoNova'] === true){
			$novoProjeto = [
				'---' => [
					'n' => 'Novo Projeto...'
				]
				];
		}
	}

	$result = $selectConteudo + $novoProjeto;

	return $result;
}



}


?>