<?php

	// Importação do arquivo calculos.php onde estão as funções
	// pode ser feita através do  - includ() ou - require()
	// Quando usamos no método once - includ_once() ou require_once() é feito um tratamento
	//em que o arquivo só pode ser importado uma vez.

	require_once('modulo/calculos.php');
	require_once('modulo/config.php');


 //Declarando as variáveis
$valor1 =(double)0;
$valor2 =(double)0;
$resultado=(double)0;
$radio= (string) null;


 




//ele verifica qual o tpo de dados de uma variável.
//echo(gettype($nome));

//permite modificar o tipo de dados de uma variável
//settype($nome,"string");

// - strtoupper() - permite converter o texto para maiusculo
// - strtolower() - permite converter para minusculo



if(isset($_POST['btncalc']))
{
	//receber valores declarados
	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	//comando de validação de tratamento de erro caso a caixa esteja vazia
	if($_POST['txtn1'] == "" || $_POST['txtn2'] == "" )
		echo(ERRO_MSG_OPERACAO_CAIXA_VAZIA);

	else
	{ 
		//Validação de tratamento de erro caso umas as opções de rádios estejam vazias
		if(!isset($_POST['rdocalc'])) 
		echo(ERRO_MSG_OPERACAO_INVALIDA);
		else
		{
			if( ! is_numeric($valor1) || ! is_numeric($valor2))
				echo(ERRO_MSG_OPERACAO_INVALIDA_TEXTO);

			else
				{
			// recebimento do radio dentro do if para que seja contado como existente
			$radio = strtoupper( $_POST['rdocalc']);
			
			// chamada da função de calculos matemáticos
			//passamos os valores e o tipo de opeação e recebermos os valores e resultados.

			$resultado= operacaoMatematica($valor1, $valor2, $radio);
			


			
				
			}        
		}
	}
	
}


?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="POST" action="calculadora_simples.php">
						Valor 1:<input type="text" name="txtn1" value=<?=$valor1;?> > <br>
						Valor 2:<input type="text" name="txtn2" value=<?=$valor2;?>  > <br>
						<div id="container_opcoes">
																		<!-- forma de colocar o checked dentro do radio nas opções -->
							<input type="radio" name="rdocalc" value="somar"  <?= $radio == 'SOMAR'? 'checked' : null;?> >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" <?= $radio == 'SUBTRAIR'? 'checked' : null;?> >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" <?= $radio == 'MULTIPLICAR'? 'checked' : null;?>>Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" <?= $radio == 'DIVIDIR'? 'checked' : null;?> >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">

						<?=$resultado;?>

						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>