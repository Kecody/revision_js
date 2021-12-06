<?php

/*
Exercie dire si les conditions soit vraie soit fausse
*/

// le et passif comme la première est fausse il ne vérifie pas la seconde et le script ne plante pas, rappel pour un & il faut que les deux conditions soient vraies pour que la condition générale soit vraie
$exp1 = (0 != 0 && 1/0 == 2) ;    

// echo $exp1 ? "YES" : "NO";

$exp2 = (!true || true) ;
// (false || true) = true

$exp3 = (!true || false) ;
// (false || false) = false

$exp4 = !(true || true) ;
// !true = false

$exp5 = (true || false) && false;
// (ture && false) = false

$exp6 = (true || false) && true;
// true && true = true

$exp7 = (true || false) && ( (!false && true) || true );
// true && true = true

$exp8 = ((false || false) && (!false && false)) || true ;
// (false && false) || true
// (false || true) = true

$exp9 = (false || false) && (!false && false) || true ;
// false && false || true
// false || true = true

$exp10 = 3*3.5 > 10 ;
$exp11 = 3*7  == 21 ;
$exp12 = 3-1 >= 1;
$exp13 = 0 < pow(2,10) == pow(2,10);
$exp14 = !(!true);
$exp15 = (5.5*2 == 11 || 1/2 != .5) && (3%2 == 0);
$exp16 = (5.5*2 == 11 || 1/2 != .5) && (3%2 != 0);