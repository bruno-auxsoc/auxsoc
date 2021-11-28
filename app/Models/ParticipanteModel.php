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


public function getAllWithGrupos(){
	$this->select(
		"*"
	);
	$this->join('grupos', 'grupos.grupo_id = participantes.grupo_id');
	return $this->findAll();
}


}

?>