<?php
	$json = file_get_contents("penerbit3.json");
	$penerbit = json_decode($json);
	foreach($penerbit->penerbit as $p){
		echo $p->nama_penerbit;
		echo "<br>";
	}
?>