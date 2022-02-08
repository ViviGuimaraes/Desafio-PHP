<?php

    //Importando a função do arquivo "calculos.php
    require_once("calculos/funcao.php");



    //declaração de variáveis 
    //nomeVar = (tipoDados) ValorInicial;

    $nota1 =(double) 0;
    $nota2 =(double) 0;
    $nota3 =(double) 0;
    $nota4 =(double) 0;
    $media =(double) 0;
    $resultado=(double) 0;

    //validação para tratar se o botão foi clicado  
    if(isset($_POST['btnCalc'])){


            //recebendo dados ultilizando POST do formulário.
        $nota1 =$_POST["txtn1"];
        $nota2 =$_POST["txtn2"];
        $nota3 =$_POST["txtn3"];
        $nota4 =$_POST["txtn4"];


        //Operadores lógicos, 
        //Ou - or, ||
        //E - and, &&
        //Negação - !

        /*
         is_numeric () - permite validar se o conteúdo é um número
         is_string() - permite validar se o conteúdo é uma is_string
         is_integer () - permite validar se o conteúdo é inteiro
         is_double() - permite validar se o conteúdo é um valor real
         is_array() - permite validar se o conteúdo é um veotr ou matris
         is_bool() - permite validar se o conteúdo é um booleano
         ... e outras opções de validação 
         */
         
        //tratamento de erro para validação de caixa vazia
        if($_POST['txtn1'] =="" || $_POST['txtn2'] =="" || $_POST['txtn3']=="" || $_POST['txtn4']=="" )

        {
             echo (' <p class= "msgErro"> Favor, verifique se todas as notas foram preenchidas ! </p> ');
        } else 
        {
            
            //Tratamento de erros para validação de caractéres não numericos
            if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4) )
            {
                echo(' <p class= "msgErro"> Todos oos valores digitados devem ser números reais. </p> ');
            }else
            {
              
                $resultado= calculoMedia($nota1,$nota2,$nota3,$nota4,$media);
            }
        }
    }


?>



<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo($nota1);?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo($nota2);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo($nota3);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo($nota4);?>" >
                    </div>
                    <div>
                        <input type="submit" name="btnCalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?php echo($resultado); ?>
            </footer>
        </div>
        
		
	</body>

</html>