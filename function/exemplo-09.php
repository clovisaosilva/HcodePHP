<?php
	$hierarquia = array(
		array(
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
				//Início: Diretor Comercial
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						//Início Gerente de Vendas
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
						//Término: Gerente de vendas
					)
				),
				//Término: Diretor Comercial
				//Início: Diretor Financeiro
				array(
					'nome_cargo'=>'Diretor Financeiro',
					'subordinados'=>array(
						//Início Gerente de Contas a Pagar
						array(
							'nome_cargo'=>'Gerente de Contas a Pagar',
							'subordinados'=>array(
								//Início: Servidor de pagamentos
								array(
									'nome_cargo'=>'Supervisor de Pagamentos'
								)
								//Término: Servidor de pagamentos
							)
						),
						//Término: Gerente de Contas a Pagar
						//Início: Gerente de compras
						array(
							'nome_cargo'=>'Gerente de compras',
							'subordinados'=>array(
								//Início Supervisor de suprimentos
								array(
									'nome_cargo'=>'Supervisor de Suprimentos',
									'subordinados'=>array(
										array(
											'nome_cargo'=>'Funcionário'
										)
									)
								)
								//Término: Supervisor de suprimentos
							)
						)
						//Término: Gerente de compras
					)
				)
				//Término: Diretor Financeiro
			)
		)
	);
	
	function exibe($cargos){
		$html = "<ul>";
		
		foreach($cargos as $cargo){
			$html .= "<li>";
			
			$html .= $cargo['nome_cargo'];
			
			if(isset($cargo['subordinados'])&& count($cargo['subordinados']) > 0){
				$html .= exibe($cargo['subordinados']);
			}
			
			$html .= "</li>";
		}
		
		$html .= "</ul>";
		
		return $html;
			
	}
	
	echo exibe($hierarquia);
?>