<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
/*
scrabble an puzzle moyen
*/
function existe($tab, $bool, $lettre){
    foreach($tab as $j){
        $existe = array_search($j, $lettre);
        if($existe === false){
            $bool = false;
            //echo("hello ");
            break;
        }
        unset($lettre[$existe]);
    }
    return $bool;
}



$max = 0;
$res = 0;
$affich = "";
$mots[] = "";

$valeur = array( 
        'a' => 1, 'b' => 3, 'c' => 3, 'd' => 2, 'e' => 1, 'f' => 4, 'g' => 2,  'h' => 4, 'i' => 1, 'j' => 8,
        'k' => 5, 'l' => 1, 'm' => 3, 'n' => 1, 'o' => 1, 'p' => 3, 'q' => 10, 'r' => 1, 's' => 1, 't' => 1,
        'u' => 1, 'v' => 4, 'w' => 4, 'x' => 8, 'y' => 4, 'z' => 10,
    );

fscanf(STDIN, "%d",
    $N
);



for ($i = 0; $i < $N; $i++)
{
    $W = stream_get_line(STDIN, 30 + 1, "\n");
    $mots[$i] = $W;
    //echo($W."\n");
}
$LETTERS = stream_get_line(STDIN, 8 + 1, "\n");
$lettre = str_split($LETTERS);

foreach ($mots as $a){
    $tab = str_split($a);
    $bool = true;
   
    
    if(existe($tab, $bool, $lettre)){
        foreach($tab as $j){
                $res += $valeur[$j];
        }
        if($res > $max){
            $max = $res;
            $affich  = $a;
        }
        $res = 0;
    }
}



// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo($affich."\n");
?>