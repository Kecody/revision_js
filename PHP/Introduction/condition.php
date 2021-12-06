<?php

$exp1 = (0!= 0 && 1/0 == 2) ;    

$exp2 = (!true || true) ;

$exp3 = (!true || false) ;

$exp4 = !(true || true) ;

$exp5 = (true || false) && false;

$exp6 = (true || false) && true;

$exp7 = (true || false) && ( (!false && true) || true );

$exp8 = ((false || false) && (!false && false)) || true ;

$exp9 = (false || false) && (!false && false) || true ;