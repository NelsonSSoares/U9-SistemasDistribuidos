<?php 

header('content-type: application/json; charse=UFT-8');
# comentario de linha
// comentario de linha

/*
COMENTARIO DE BROCO
*/

//DECLARANDO VARIAVEIS -  FRACAMENTE TIPADA
//Usa-se $ para declarar variavel ex: $nome = nelson;

//$nome = 'Nelson de Sousa';
//$idade = 29;

//DECLARANDO ARRAY - Usa-se [], como no Python ou Java
//Arrays permitem multiplos tipos, como as listas em python

//$array_numeric = [1,2,3,4,5];

//DICIONARIO - São representados por arrays associativos 'key' : value;

//$dicionario = ['Chavr1' => 'Valor1', 'Chave2'=> 'Valor2'];

//SAIDA DE DADOS - echo() || print();

$nome = 'Nelson de Sousa';
$idade = 29;

$array_numeric = [1,2,3,4,5];

$dicionario = ['Chavr1' => 'Valor1', 'Chave2'=> 'Valor2'];

print($idade . '<br>');
echo $nome;
print_r($array_numeric);

print('<br>');

print_r($dicionario);

print('<br>');

foreach($array_numeric as $value){
    print($value . '<br>');
}

foreach($dicionario as $key => $value){
    print($chave . '-' . $valor . '<br>');
}


print(json_encode($dicionario));

?>