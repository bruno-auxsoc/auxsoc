<?php

namespace App\Models;

class AtendimentoModel extends BaseModel
{

	protected $table = 'atendimentos';
	protected $primaryKey = 'atendimento_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'atendimento_id',
		'assistente_id',
		'psicologo_id',
		'membro_id',
		'atendimento_data',
		'atendimento_hora',
		'atendimento_desc'
	];

	protected $validationRules = [
		'atendimento_data' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'atendimento_hora' => [
			'label' => '',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

	public function formDropDown(array $params = null, array $order = null)
	{
		$this->select('atendimento_id');

		if (!is_null($params) && isset($params['atendimento_id'])){
			$this->where(['atendimento_id' => $params['atendimento_id']]);

		}

		$atendimentosArray = $this->findAll();

		$optionsAtendimentos = array_column($atendimentosArray, 'atendimento_id', 'atendimento_id');

		$optionsSelecione = [
			'' => 'Selecione...'
		];

		$selectConteudo = $optionsSelecione + $optionsAtendimentos;

		$novoAtendimento = [];

		if(!is_null($params) && isset($params['opcaoNova'])){
			if((bool)$params['opcaoNova'] === true){
				$novoAtendimento = [
					'---' => [
						'n' => 'Novo Atendimento...'
					]
					];
			}
		}

		$result = $selectConteudo + $novoAtendimento;

		return $result;
	}

	public function getAllWithPsicologoseAssistenteseMembros(){
		$this->select(
			"*"
		);
		$this->join('psicologos', 'psicologos.psicologo_id = atendimentos.psicologo_id');
		$this->join('assistentes', 'assistentes.assistente_id = atendimentos.assistente_id');
		$this->join('membros', 'membros.membro_id = atendimentos.membro_id');
		return $this->findAll();
	}


}

?>