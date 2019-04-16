<?php
include 'config.php';
include 'functions.php';
if (isset($_POST)) {
	if(isset($_POST['upload'])) {	
		$upload = upload(); 
	}
	if(isset($_POST['delete'])) {
		$delete = del(FILES_PATH.DS);
	}
	
	
	if (file_exists(FILES_PATH) && (substr(sprintf('%o', fileperms(FILES_PATH)), -4)) == '0777') {
	$result = files_to_list();
	} else {
		$result = false;
	}
}
include 'templates/index.php';
?>

