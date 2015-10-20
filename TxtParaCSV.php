<?php
/**
* Pega informações por linha, por tamanho de cada campo na linha e exporta para csv.
*/

$lista = array();
$handle = fopen("arquivo.txt", "r");
if ($handle) {
	while (($line = fgets($handle)) !== false) {
		
		$data = array();
		$data[] = substr($line,0,9);
		$data[] = substr($line,9,(17-9));
		$data[] = substr($line,17,(94-18));
		$data[] = substr($line,94,(102-94));
		$data[] = substr($line,102,(179-102));
		$data[] = substr($line,179,(259-179));
		$data[] = substr($line,259,(366-259));
		$data[] = substr($line,366,(446-366));
		$data[] = substr($line,446,(518-446));
		$data[] = substr($line,518,(549-518));
		$data[] = substr($line,549,(632-549));
		
		$lista[] = $data;
		
	}
	fclose($handle);
} else {
	// error opening the file.
}


$fp = fopen('arquivo.csv', 'w+');

foreach ($lista as $linha) {
	fputcsv($fp,$linha);
}

fclose($fp);
