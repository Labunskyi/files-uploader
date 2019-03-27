<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

	<h2>Загрузка файла</h2>
	<form method="post" enctype='multipart/form-data'>
	Выберите файл: <input type='file' name='filename' size='10' /><br /><br />
	<input name="upload" type='submit' value='Upload' />
	</form>
	<div class="container">
	<div class="row">
    <div class="col-sm-10">
	<table class="table table-bordered">
	<thead>
        <tr>
            <th>№</th>
            <th>Name</th>
            <th>Size (Kb)</th>
			<th>Delete</th>
        </tr>
    </thead>
	<?php $i = 1; foreach($files_in_array as $files_data)
	
	{ ?>
	
	<tr>
    
		<td><?=$i++?></td>
		<td><?=$files_data?></td>
		<td >
			<?=bites_to_kilobites(filesize(FILES_PATH.DS.$files_data))?>
		</td>
		<td >
			<a href="<?=FILES_PATH.DS.$files_data?>">
			<form method="post" enctype='multipart/form-data'>
					<button type="submit" name="delete" value="<?=FILES_PATH.DS.$files_data?>" class="btn btn-sm btn-warning">Delete</button>
			</form>
			</a>
			
		</td>
	</tr>
	<?php } ?>
	</table>
	</div>
	</div>
	</div>
</body>
</html>

