<?php
// _____________________________________________________________________________________
// ARQUIVO DE FUNÇÕES DE MATEMÁTICA que poderá ser ultilizado dentro do projeto
// AUTOR: Vívian G. Vaz
//  Data: 04/02/2022
// Versão 1.0
// _____________________________________________________________________________________


// quaquer variável criada dentro da função só tem valor detrno da função
function operacaoMatematica($numero1, $numero2, $operacao) // o que está dentro do parentese é chamado de fonte
{
	//declaraçção de variaveislocais da função, 
	// todas as variáveis recebem dados de parametro da fonte
	$num1 = (double) $numero1;
	$num2 = (double) $numero2;
	$tipoCalculo =(string) $operacao;
	$result = (double) 0;

	//Processamento do calculo ds operações
	switch($tipoCalculo)
	{
		case("SOMAR"):
			$result = $num1 + $num2;
			break;
			
		case("SUBTRAIR"):
			$result = $num1 - $num2;
			break;

		case("MULTIPLICAR"):
			$result = $num1 * $num2;
			break;

		case("DIVIDIR"):

		if($num2 == 0 )
			echo(ERRO_MSG_DIVISAO_ZERO);
		else
		$result = $num1 / $num2;

		break;
	}


	// Comando para arredondar as casas depois da vígula, round=arredondar
		$result = round($result, 5);
	// $result = number_format($result, 2); = outra forma de arredondar.
	      
	return $result;
}






?>