<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
fscanf(STDIN, "%d",
    $n
);

$maxValueLimit = pow(2, 31);
$minValueLimit = 0;
$vs = stream_get_line(STDIN, (strlen($maxValueLimit)+1)*$n+1, "\n");
$valeur_bourse = explode(' ', $vs);

// foreach($valeur_bourse as $v){
//     echo($v."\n");
// }

$perte = 0;
$max = 0;

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
$taille = count($valeur_bourse) - 1;
foreach($valeur_bourse as $v){
    if($v > $max){
        $max = $v;
    }
    if($v - $max < $perte){
        $perte = $v - $max;
    }
}
echo($perte);
?>