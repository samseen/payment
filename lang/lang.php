<?php
	$langPlug = array(
		"fr" => "fr_FR.utf8",
		"en" => "en_US",
		"es" => "es_ES.utf8"
		);
	//	
	if(isset($langPlug[$lang]) && $langPlug[$lang])
		{
		putenv('LC_ALL='.$langPlug[$lang]);
		setlocale(LC_ALL, $langPlug[$lang]);
		bindtextdomain("payment", dirname (__FILE__));
		textdomain("payment");
		}
?>