<?	
	include_once "config.php";
	include_once "../engine/whc_index.php";

	$index = new whc_index();
	$index->exec($config);
?>
