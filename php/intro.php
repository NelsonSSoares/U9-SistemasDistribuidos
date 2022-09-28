<?php

define('PHP_BR', '</br>');

//Variaveis em PHP
//1 - Iniciam invariavelmente com simbolo de cifrão $
//2 - São Case Sensitive
//3 - Seguem os mesmos padrões de declaração do C e JAVA
//4 - São Finalizados com ponto e virgula ; assim como instruções
//5 - Os tipos em PHP são dinamicos, sem necessidade de declaração

####################################################################
// Declarando Variaveis
$nome = "Nelson de Sousa";//STRING
$idade = 29;//INT
$salario = 5.500;//FLOAT
$valores = [1, 'Nelson', 5.500]; //ARRAY MULTI-TIPADO

// Saida de dados: Terminal ou Web
// 3 tipos 

// 1 echo valor/variavel, ...,valor/variavel;
// 2 echo(variavel);
// 3 print(valor/variavel);

echo $nome, $idade;
echo($nome . $idade . "\n"); // ponto final . serve para concatenar
print($salario) . PHP_EOL; // PHP_EOL pula linha EOL = END OF LINE


//Para Arrays, são utilizados os comandos print_r() e var_dump();
//Esses comandos mostram os valores e os indices de um array
// Normalmente Variaveis deste tipo são utilizados em conjunto com interadores (laços) FOR

echo "<pre>";
print_r($valores); // indice e valor
var_dump($valores); // indice, tipo e valor
echo "</pre>";

########################################
//ESTRUTURA DE DECISÃO (if - elseif - else);
// Pode ser declarada de duas formas
// 1 - com {};
// 2 - com : e endif;

if($idade < 18){
    echo "$idade é menor de idade" . PHP_BR;
}elseif($idade > 18 && $idade < 60){
    echo "$idade é maior de Idade" . PHP_BR;
}else{
    echo "$idade terceira idade" . PHP_BR;
}
 echo PHP_BR;

 $idade2 = rand(0, 99); // gera um numero aleatorio entre os valores informados 
 // Segundo Formato

 if($idade2 < 18):
    echo "$idade2 é menor de idade" . PHP_BR;
elseif ($idade2 > 18 && $idade2 < 60):
    echo "$idade2 é maior de Idade" . PHP_BR;
else:
    echo "$idade2 terceira idade" . PHP_BR;
endif;

#################################################
// Estrutura de Seleção switch() e match()

// FORMA 1 SWITCH

$a = 2;

switch($2){
    case 1:
        echo "O valor de a é $a" . PHP_BR; 
        break;
    case 2:
        echo "O valor de a é $a" . PHP_BR;
        break;
    default:
        echo "O valor de a é $a e é invalido!" . PHP_BR;
        break;
}

echo PHP_BR;

// FORMA 2 MATCH
$a = rand(1, 5);
$resultado = match($a){
    1 => 'Valor 1',
    2 => 'Valor 2',
    3 => 'Valor 3',
    4 => 'Valor 4',
    5 => 'Valor 5',
    default => 'Nenhuma Alternativa!',
};

echo $resultado . PHP_BR;

//function x(){
//    return 'hello';
//}


// LAÇOS DE REPETIÇÃO - WHILE FOR E FOREACH

$c = 0;

while($c < 11){
    echo $c . PHP_BR;
    $c++;
}

while($c < 11):
    echo $c . PHP_BR;
    $c++;
endwhile;

echo PHP_BR;

//FOR
for($b = 0; $b <11; $b++){
    echo $b . PHP_BR;
}

// FOREACH - USADO PARA PERCORRER ARRAYS (1-D, 2-D ... , n-D)

$array = [1, 2, 3, 4, 5, 'texto', 1234.56];

foreach ($array as $value) {
    echo $value . PHP_BR;
}



?>