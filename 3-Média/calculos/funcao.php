<?php
// _____________________________________________________________________________________
// ARQUIVO DE FUNÇÕES DA MÉDIA  que poderá ser ultilizado dentro do projeto media php
// AUTOR: Vívian G. Vaz
//  Data: 08/02/2022
// Versão 1.0
// _____________________________________________________________________________________


//calculando a média dentro da função 
function calculoMedia($n1,$n2,$n3,$n4,$calcMedia){


    //declarando as variáveis que receberam valor da chave.
    $nota1 = (double) $n1;
    $nota2 = (double) $n2;
    $nota3 = (double) $n3;
    $nota4 = (double) $n4;
    $media = (double) $calcMedia;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $resultado = $media;

    //toda função precisa retornar algo.
    return $resultado;
}




?>