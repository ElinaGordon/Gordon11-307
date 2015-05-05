<?php 
mysql_connect("localhost", "DNS\1")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");
mysql_select_db("Orders")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
$name1 = $_REQUEST['name1'];
$name2 = $_REQUEST['name2'];
$name3 = $_REQUEST['name3'];
$item=$__REQUEST['item'];
$qty = $_REQUEST['qty'];
$me = $_REQUEST['me'];
$prices=array("cheese"=>100, "bread"=>15, "butter"=>70, "milk"=>50);			
$totalPrice=$qty*$prices["$item"];
$insert_sql = "INSERT INTO Table_1 (name1, name2, name3, item, qty, me, totalPrice)" .
"VALUES('{$name1}', '{$name2}', '{$name3}', '{$item}', '{$qty}', '{$me}', '{$totalPrice}');";
mysql_query($insert_sql);
?>