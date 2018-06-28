<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
function pertes($tab){
    $perte = 0;
    foreach($tab as $key => $v){
        if(isset($tab[$key + 1])){
            for($i = $key + 1; $i < count($tab); $i++){
                if($tab[$i] - $v < $perte){
                    $perte = $tab[$i] - $v;
                }
            }
        }
    }
    return $perte;
}

fscanf(STDIN, "%d",
    $n
);

$inputs = fgets(STDIN);
$inputs = explode(" ",$inputs);

$perte = 0;
$valeur_bourse[] = "";

for ($i = 0; $i < $n; $i++)
{
    $v = intval($inputs[$i]);
    $valeur_bourse[$i] = $v;
    //echo($v."\n");
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));



$retour = pertes($valeur_bourse);
$perte = $retour;

if($perte < 0){
    echo($perte."\n");
}
else{
    echo("0\n");
}
?>