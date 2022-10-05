<?php
//inclui o arquivo de estilos CSS (Importações)
include __DIR__ . '/styles.php';

echo ('<h1>Funções em PHP</h1>');

//declaração de uma função de soma

function soma(int $v1, int $v2){
    return $v1+$v2;
}

echo'<pre>';
print_r(soma(10,19));
echo '</pre>'
############################

echo '<h2>Funçções de Texto ou Strings </h2>'

echo '<h3>strlen(string)</h3>'

$texto = 'Hoje a noite está fria';

echo'<pre>'
print_r(strlen($texto));
echo'</pre>';

// Verificando espaços nas extremidades
$texto2 'Hoje o dia está quente';

echo'<pre>';
var_dump($texto2);
echo '</pre>';

//Limpando espaços extremidades
echo'<pre>';
var_dump(trim($texto2));
echo '</pre>';

// Limpando espaços a esquerda
echo'<pre>';
var_dump(ltrim($texto2));
echo '</pre>'

//Limpando espaços a direita

echo'<pre>';
var_dump(rtrim($texto2));
echo '</pre>'

$texto3 = 'Nelson de Sousa';

echo'<pre>';
var_dump("Eu $texto3 residente na rua...");
echo '</pre>'

//Como saber se há caracteres em branco nas extremidades
//strlen($var) - strlen(trim($var)) != 0;

$texto4 = 'Hoje está frio, e amanha é um novo dia';
//CAIXA ALTA     strtoupper()
echo'<pre>';
var_dump(strtoupper($texto4));
echo'</pre>';
//CAIXA ALTA UTF-8
echo'<pre>';
var_dump(mb_strtoupper($texto4));
echo'</pre>';

//caixa baixa   strtolower()
echo'<pre>';
var_dump()
echo'</pre>';


######

/*
echo'<pre>';
var_dump(str_replace());
echo'</pre>';
*/

echo'<h2>Manipulação de dados em Strings</h2>';
echo'<h3>str_replace(seek, chenge, $var)</h3>';

//SUBSTITUINDO PALAVRAS
$texto5 'amanha é está frio, hoje é um novo dia';

echo'<pre>';
var_dump(str_replace('frio', 'quente', $texto5));
echo'</pre>';

//SUBSTITUINDO MAIS DE UMA PALAVRA
echo'<pre>';
var_dump(str_replace(['hoje', 'dia'], ['ontem','noite'], $texto5));
echo'</pre>';

//lambda
/*
$var = function(param){
    statement...
}


//closure
$var = function(param) use(variaveis){
    statment
}
*/

echo'<h2>slipt() e explode()</h2>';

$texto6 = 'hoje está frio';
//SLLIP() converte uma string em um array caractere por caractere
echo'<pre>';
print_r(str_split($texto6));
echo'</pre>';

//EXPLODE() converte cada palavra em um array apatir do espaço entre eles ou outro paremetro
echo'<pre>';
print_r(explode(' ',$texto6));
echo'</pre>';


echo '<h1>CLASSES E METODOS</h1>';
//Métodos magicos

class Aluno{
    //atributos
    //pode ser tipado private String $nome;
    private  $nome;
    private static $curso;

    //construtor
    //public function __construct(){

    //}

    //getters e stters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->$nome;
    }
/*
    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function getCurso(){
        return $this->$curso;
    }

    //metodo estatico
*/
    public static function setCurso($curso){
        self::$curso = $curso;
    }

    public static function getCurso(){
        return self::$curso;
    }
}

$aluno = new Aluno();
$aluno->setNome('Nelson Sousa');
$aluno->setCurso('Ciência da Computação');

echo'<pre>'
var_dump($aluno->getNome());
echo'</pre>';

echo '<pre>';
var_dump($aluno->getCurso());
echo'</pre>';

//Acessanso membros estáticos
Aluno::setCurso('ADS');
echo'<pre>';
var_dump(Aluno::getCurso());
echo'</pre>';

//ATIVIDADE EM AULA

class Calculo{

    public int function soma(int $v1, int $v2){
        return $v1 + $v2;
    }

    public int function multiplicar(int $v1, int $v2){
        return $v1*$v2;
    }

    public int function subtrair(int $v1, int $v2){
        return $v1-$v2;
    }

    public int function dividir(int $v1, int $v2){
        return $v1/$v2;
    }

    //DESAFIO PARA PROX AULA, CALCULO EM ARRAY

    public int function somarVarios(int $varios){
        return null;
    }

    public int function multiplicarVarios(int $varios){
        return null;
    }
}

?>