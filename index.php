<?php

include 'config.php';
include 'functions.php';

if ($_POST) {
	if(isset($_POST['upload'])) {	
		$upload = upload(); 
	}

	if(isset($_POST['delete'])) {
		$delete = del(FILES_PATH.DS);
	}
	$result = files_to_list();
	
}
include 'templates/index.php';
?>
