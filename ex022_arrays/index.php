<?php 

// Arrays numericos
    //1
    $nomes1 = array("Maria","João","jose");
    //2 - é possivel definir o indice
    $nomes2 = array(0=>"Maria",5=>"João",2=>"Jose");
    //3
    $nomes3 = [0=> "nome0",1=> "nome1", "nome2"];
    $nomes3[3] = "nome3";

    //Navegação:
    foreach($nomes1 as $nome){
        echo $nome;
    }
// Arrays associativos
    //1
    $pessoa1 = ["nome"=>"João", "idade"=>21, "altura"=>1.89];
    $pessoa1["cidade"]="São Paulo";

    //navegação:
    foreach($pessoa1 as $key => $valor){
        echo "<br>";
        echo $key.":".$valor;
    }
// Array multidimensionais
    $classificacoes = array(
        "cariocas"=> array("campeao"=>"vasco","vice"=>"flamengo","resto"=>"botafogo"),
        "paulistas"=> array("campeao"=>"santos", "vice"=>"sao paulo", "resto"=>"palmeiras")
    );

    foreach($classificacoes as $regiao=>$times){
        echo "<hr>";
        echo "região:".$regiao.",<br>";
        foreach($times as $posicao => $time){
            echo $posicao.":".$time."<br>";
        }
    }

// funlções
    //in_array("valor", $array) confere a existencia do valor
    //array_keys($array) retorna um array com as chaves do array parametro
    //array_values($array) retorna um array co os valores do array parametro
    //array_pop($array) remove o ultimo valor
    //array_shift($array) remove o primeiro valor
    //array_unshift($array, "valor1","valor2") add 1 ou mais elementos no começo
    //array_push($array, "valor1","valor2") add 1 ou mais no final
    //array_combine($array1, $array2)
    //array_sum()
    //explode("/","20/06") string em array
    //implode("-", $array) array em string
?>