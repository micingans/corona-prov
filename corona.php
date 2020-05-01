<?php

error_reporting(0);
function http_request($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}
echo "Masukan nomor daerah : ";
$nmr = trim(fgets(STDIN)); 
$web = http_request("https://api.kawalcorona.com/indonesia/provinsi/");
$web = json_decode($web, TRUE);

$kode = $web[$nmr]['attributes']['Kode_Provi'];
$provinsi = $web[$nmr]['attributes']['Provinsi'];
$positif = $web[$nmr]['attributes']['Kasus_Posi'];
$sembuh = $web[$nmr]['attributes']['Kasus_Semb'];
$mati = $web[$nmr]['attributes']['Kasus_Meni'];

echo "Data Perkembangan Virus Corona di ".$provinsi."\n";
echo "Provinsi     : ".$provinsi."\n";
echo "Kode         : ".$kode."\n";
echo "Positif      : ".$positif."\n";
echo "Sembuh       : ".$sembuh."\n";
echo "Meninggal    : ".$mati."\n";

?>