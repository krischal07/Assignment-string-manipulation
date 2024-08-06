<?php 
    $spell = "   ABRACADABRA   ";
    $trimSpell = trim($spell);
    echo $trimSpell."\n";
    $trimSpellLower = strtolower($trimSpell);
    echo $trimSpellLower."\n";
    $cmp = strcmp($trimSpellLower,"abracadabra");
    if($cmp ==0){
        echo "Wizarding world is not at risk!!"."\n";
    }else{
   echo "Wizarding world is not at risk!!"."\n";
    }

    
?>