<?php


function fib(int $n){


    if($n === 1){
        return 1;
    }
    elseif($n === 0){
        return 0;
    }
    else{
        return fib($n-1) + fib($n-2);
    }
}



function show_fibbonaci($n){

    for($i=0; $i<$n; $i++){
        echo fib($i).PHP_EOL;
    }

}

//show_fibbonaci(20);


function check_palindrom(string $text){
   
    $result = 'Palindrom! :)'.PHP_EOL;
        for($n=0; $n<strlen($text); $n++){

        if(!($text[$n] === $text[strlen($text)-1-$n])){
            $result = 'Nije palindrom';
        }

        return $result;
    }
}

echo check_palindrom('anavolimilovana');


function checkSum(){
    $niz = [];
$a = 1;
    while ($a <= 5) {
       $niz[] = readline('unesite broj: ');
       $a++;
    }
    echo 'suma: '.array_sum($niz).PHP_EOL;
    if (array_sum($niz)%2 != 0){
        checkSum();
    }
    else{
        echo 'najveći broj niza je: '. max($niz). PHP_EOL;
    }
}

checkSum();