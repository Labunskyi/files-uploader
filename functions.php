
<?php

function upload(){
	if ($_FILES && $_FILES['filename']['error'] == UPLOAD_ERR_OK && ! empty($_FILES)) {
		$uploads_dir = FILES_PATH;
		$tmp_name = $_FILES['filename']['tmp_name'];
		$name = $_FILES['filename']['name'];
		if (is_file($uploads_dir.DS.$name) && file_exists($uploads_dir.DS.$name)) {
			echo "Such file exists"; 
			return false;
		} elseif ($_FILES['filename']['size'] > 2000000) {
			echo "Such file exceed 2 Mb"; 
			return false;
		}
		else {
			move_uploaded_file($tmp_name, $uploads_dir.DS.$name); 
			echo "Файл " . $_FILES['filename']['name'] . " загружен"; 
			return true;
		}
	}
}

function del() {
	if (file_exists($_POST['delete'])) {
		return unlink($_POST['delete']);
	} else { 
		return false;
	}

}
function bites_to_kilobites($bites) {
	return (int) ($bites / 1024);
}

function files_to_list() {
	$files_in_array = array_slice(scandir(FILES_PATH), 2);
	ob_start();
	include __DIR__ . '/templates/index.php';
	$out = ob_get_clean();
	echo $out;
	return $out;
}

?>

