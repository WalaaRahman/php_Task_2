<?php

    function printChar($char){

        if($char =='a'){
            return 'b';
        }
        elseif($char =='z'){
            return 'a';
        }

    }

    echo printChar("a");
    echo '<br>';
    echo printChar("z");
    echo '<br>';




    function printArray(){
        $students=[
            ['name'=>'Root','age'=>20],
            ['name'=>'Root2','age'=>25,
            foreach($students[$i] as $key=>$value){
                echo $key.':'.$value." ";
            }
            echo '<br>';
            echo '<br>';


        }
    }

    printArray();


?>
