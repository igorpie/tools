<?php 

echo "simple 24 bit pcm uncompressed signed .wav to FIR coefficients converter by afx@afx.su\r\n";
echo "input file: " . $argv[1] ."\r\n";


$i = file_get_contents($argv[1]);
$i = substr( $i , 44 );						// skip wav header
$i = str_split($i);						// split to array of bytes


$len=count($i);
$r = "";							// result

for ($x = 0; $x < $len; $x += 3) {
	$b = ( ord($i[$x]) + 256*ord($i[$x+1]) + 65536*ord($i[$x+2]) );	// bytes to "int"
	if ( ord($i[$x+2]) > 127) $b =  $b - 16777216; 		// if negative value
	$r .= (double) ($b/8388608) ."\r\n";			// int / 2^23 = int to "double" 
}


$path_parts = pathinfo($argv[1]);
$f =  $path_parts['filename'] . ".txt";

file_put_contents($f,$r);
?>
