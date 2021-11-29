<?php

namespace App\Models;

class ParticipanteModel extends BaseModel
{

	protected $table = 'participantes';
	protected $primaryKey = 'participante_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'participante_id',
        'grupo_id',
        'participante_frequencia',
		'participante_nome',
		'participante_cpf',
        'participante_dn',
        'participante_telefone',
	];

	protected $validationRules = [
        'participante_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
        ],

        'participante_cpf' => [
			'label' => 'CPF',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
            ]

         ],
        'participante_dn' => [
            'label' => 'Data',
            'rules' => 'required',
            'errors' => [
            'required' => 'Campo {field} obrigatório'
            ]
    
        ],
        'participante_telefone' => [
			'label' => 'Telefone',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

        ],

	],
];


public function formDropDown(array $params = null, array $order = null)
{
	$this->select('participante_id, participante_nome');

	if (!is_null($params) && isset($params['participante_id'])){
		$this->where(['participante_id' => $params['participante_id']]);

	}

	$participantesArray = $this->findAll();

	$optionsParticipantes = array_column($participantesArray, 'participante_nome', 'participante_id');

	$optionsSelecione = [
		'' => 'Selecione...'
	];

	$selectConteudo = $optionsSelecione + $optionsParticipantes;

	$novoParticipante = [];

	if(!is_null($params) && isset($params['opcaoNova'])){
		if((bool)$params['opcaoNova'] === true){
			$novoParticipante = [
				'---' => [
					'n' => 'Novo Participante...'
				]
				];
		}
	}

	$result = $selectConteudo + $novoParticipante;

	return $result;
}



public function getAllWithGrupos(){
	$this->select(
		"*"
	);
	$this->join('grupos', 'grupos.grupo_id = participantes.grupo_id');
	return $this->findAll();
}


}

?>