<?php

include 'config.php';
include 'functions.php';

if(isset($_POST['upload'])) {	
	upload(); 
	files_to_list();
}

if(isset($_POST['delete'])) {
	del(FILES_PATH.DS);
	files_to_list();
}


?>

