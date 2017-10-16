<?php
require "simple_html_dom.php";
$html=file_get_html("http://zuhaus.vn/zu-design-pc150502.html?page=1");
// $html=file_get_html("https://vnexpress.net/");
$ds=$html->find("ul.products li");
// print_r($ds);
// echo $html;
// echo count($ds);

foreach ($ds as $sp) {
	# code...
	// echo $sp;
	$price=$sp->find("span.price span",0);
	echo $price;
	$name=$sp->find("h3 a",1)->innertext;
	echo $name;
	// echo $name;

		}
?>