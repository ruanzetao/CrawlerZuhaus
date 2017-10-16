<?php
require "simple_html_dom.php";

// $mang=array();

for($t=1;$t<=3;$t++){
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
	$src=$sp->find("div.product-header a img",0)->src;
	echo $src;  
	echo "<hr/>";

	// array_push($mang,new DataClothe($price,$name,$src));
	}
}



	// echo json_encode($mang);

	// print_r($mang);

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
