<?php
// 私の名前は、estra
// ご希望の商品は、Aセット
// 注文数は、10

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は".$name."<br/>";
print "ご希望の商品は".$goods."<br/>";
print "注文数は".$number."<br/>";
