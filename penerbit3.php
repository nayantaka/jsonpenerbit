<?php
	$json = file_get_contents("penerbit3.json");
	$penerbit = json_decode($json);
	$x=1;
?>
	<table border=1 cellpadding=10 cellspacing=0;>
	<tr>
		<th>No</th>
		<th>Nama Penerbit</th>
		<th>Kota</th>
		<th>Buku</th>
	</tr>
<?php
	foreach($penerbit->penerbit as $p){
		echo "<tr>";
		echo "<td>$x</td>";
		echo "<td>$p->nama_penerbit</td>";
		echo "<td>$p->kota</td>";
		echo "<td>";
		foreach($p->buku as $b){
			echo $b->Judul_buku;
			echo "<br>";
		}
		echo "</td>";
		echo "</tr>";
		$x++;
		
	}
?>
</table>