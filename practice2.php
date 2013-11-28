<?php 
$name = array(
	'fast' => 'shouhei',
	'last' => 'yamaguchi'
	);

echo '苗字:'. $name['last']. PHP_EOL;
echo '名前:'. $name['fast']. PHP_EOL;
echo '苗字と名前:'. $name['last']. " ". $name['fast']. PHP_EOL;
echo '名前と苗字:'. $name['fast']. " ". $name['last']. PHP_EOL;
?>