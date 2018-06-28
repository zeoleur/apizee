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
$perte_max = 0;
$min = 0;
$max = 0;
$maybe_max = 0;

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
$taille = count($valeur_bourse) - 1;

for ($i = 0; $i < $taille; $i++){
    $act = $valeur_bourse[$i];
    $next = $valeur_bourse[$i + 1];

    if($act > $next){
        $max = ($max == 0) ? $act : $max;
        $min = ($min == 0) ? $next : min($min, $next);
        
        $perte = $min - $max;

        if($maybe_max != 0){
            $max = $maybe_max;
            $maybe_max = 0;
            $min = 0;
            
        }

        $perte_max = min($perte_max, $perte);
        
        continue;
    }
    
    if($next > $max){
        $maybe_max = $next;
    }
}

echo($perte_max);
?>