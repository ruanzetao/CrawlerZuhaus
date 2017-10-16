<?php
require "simple_html_dom.php";
$html=file_get_html("http://zuhaus.vn/zu-design-pc150502.html?page=1");
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
		}
?>