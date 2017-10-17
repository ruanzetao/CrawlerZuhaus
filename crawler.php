<?php
require "simple_html_dom.php";

// $mang=array();

for($t=1;$t<=1;$t++){
	getDatabase($t);
}


	function getDatabase($page){
	$html=file_get_html("http://zuhaus.vn/zu-design-pc150502.html?page=$page");
	$ds=$html->find("ul.products li");

	foreach ($ds as $sp) {
	# code...
	$price=$sp->find("span.price span",0);
	echo $price;
	echo "<hr/>";
	$name=$sp->find("a",3)->innertext;
	echo $name; 
	echo "<hr/>";
	$url=$sp->find("div.product-header a img",0)->src;
	echo $url;  
	echo "<hr/>";

	// download hinh
	// $url = 'http://example.com/image.php';
	// $img = './download/'.basename($src);
	// file_put_contents($img, file_get_contents($src));
	// array_push($mang,new DataClothe($price,$name,$src));
	// echo json_encode($mang);
	// print_r($mang);

	// test the download function

	// $url = 'https://www.google.com/abc/files/AwAh20isBECxwscp4JiT';
	$ch = curl_init('$url');
	$fp = fopen('./download/'.basename($url), 'wb');
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
}
}

class DataClothe{
	public $price;
	public $name;
	public $picture;	
	function DataClothe($price,$name,$picture){
		$this->$price=$price;
		$this->$name=$name;
		$this->$picture=$picture;
	}

	function INSERTDB(){
		$qr="INSERT INTO CLOTHES VALUES($price,$name;$picture)";
		// Nên kiểm tra $this->url đã có trong db chưa
	}
}
?>