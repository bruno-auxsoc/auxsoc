<?php

namespace App\Models;

class UsuarioModel extends BaseModel
{

	protected $table = 'usuarios';
	protected $primaryKey = 'usuario_id';

	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $useTimestamps = true;

	protected $allowedFields = [
		'usuario_id',
		'usuario_nome',
		'usuario_email'
	];

	protected $validationRules = [
		'usuario_nome' => [
			'label' => 'Nome',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		],
		'usuario_crp' => [
			'label' => 'CRP',
			'rules' => 'required',
			'errors' => [
				'required' => 'Campo {field} obrigatório'
			]

		]

	];

	public function formDropDown(array $params = null, array $order = null)
	{
		$this->select('usuario_id, usuario_nome');

		if (!is_null($params) && isset($params['usuario_id'])){
			$this->where(['usuario_id' => $params['usuario_id']]);

		}

		$usuariosArray = $this->findAll();

		$optionsUsuarios = array_column($usuariosArray, 'usuario_nome', 'usuario_id');

		$optionsSelecione = [
			'' => 'Selecione...'
		];

		$selectConteudo = $optionsSelecione + $optionsUsuarios;

		$novoUsuario = [];

		if(!is_null($params) && isset($params['opcaoNova'])){
			if((bool)$params['opcaoNova'] === true){
				$novoUsuario = [
					'---' => [
						'n' => 'Novo Usuario...'
					]
					];
			}
		}

		$result = $selectConteudo + $novoUsuario;

		return $result;
	}


}

?>