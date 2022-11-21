<?php
const BRACKET_LEFT = '(';
const BRACKET_RIGHT = ')';
$string     = 's * (s - a) * (s - b * (s - c) ';
$string_arr = str_split($string);
$leftStack = new SplStack();
$rightStack = new SplStack();
foreach( $string_arr as $sym ){
    if( $sym == BRACKET_LEFT ){
        $leftStack->push($sym);
    }
    if( $sym == BRACKET_RIGHT ){
        $rightStack->push($sym);
    }
}
$leftStack->rewind();
$rightStack->rewind();
$well = true;
while( $leftStack->valid() ||  $rightStack->valid() ){
    if( $leftStack->valid() &&  $rightStack->valid() ){
        $leftStack->next();
        $rightStack->next();
    }elseif( $leftStack->valid() ){
        $leftStack->next();
        $well = false;
    }elseif( $rightStack->valid() ){
        $rightStack->next();
        $well = false;
    }
}


var_dump($well);

echo '<pre>';
print_r($leftStack);
print_r($rightStack);
die();
