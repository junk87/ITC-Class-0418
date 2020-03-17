<?php
    $foo1 = "bar";
    $foo2 = 1337;
    $foo3 = 12.9;
    $foo4 = true;
    $foo5 = array($foo1, $foo2, false);
    $foo6 = array("a" => 0, "b" => 1);
    if($foo2 != 1337){
        echo "non leet";
    }
    else{
        echo "leet";
    }
    for($i = 0;$i <= 100;$i++){
        echo "$i <br>";
    }
    foreach($foo6 as $val){
        echo "$val <br>";
    }
    $q = 1;
    while(true){
        if($q % 2==0){
            $q += 1;
            echo "keep finding";
            continue;
        }
        else if($q % 2!=0){
            echo "odd";
            break;
        }
    }
?>