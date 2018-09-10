<?php
$i =0;

rekursif(5);

function rekursif($n){
	global $i;

	newrekursif($i,$n);

	echo "<br>";

	if(--$n > $i){
          
          rekursif($n);

	}
}

function newrekursif($j,$n){
	global $i;

	if($j>$i-$n){

		echo "*";

		newrekursif($j-1,$n);
	}

}
echo "<br>";
echo "======================================================================";
echo "<br>";

$a=5;
rekursif2(0,1);

function rekursif2($b,$c){
	global $a;

	newrekursif2($a,$b,$c);
	echo "<br>";

	if (++$b <$a) {
		# code...
		rekursif2($b,$c);

	}
}

function newrekursif2($d,$b,$e){

	global $a;

	if ($d>$a-$b-1) {
		# code...
		echo $e;

		newrekursif2($d-1,$b,$e+1);

	}
}
?>
