<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$desk = $_POST['desk'];
		$name = $_POST['name'];

		$dir = $desk . $name ;

		$type = $_POST['type'];



		if(file_exists($dir) != 1) {
				mkdir($dir);
				mkdir("$dir/css");
				mkdir("$dir/js");
				mkdir("$dir/fonts");
				mkdir("$dir/img");

				$file = fopen("$dir/index$type", "w") or die("Unable to open file!");
				$css = fopen("$dir/css/style.css", "w") or die("Unable to open file!");
				$js = fopen("$dir/js/backend.js", "w") or die("Unable to open file!");
				fclose($js);
				fclose($css);
				fclose($file);
		}



}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Folder Project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container text-center">
		
			<h1>Create Folders Project</h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group">

				<select name="desk" class="form-control">
					<option value="C:/">C/..</option>
					<option value="E:/">E/..</option>
					<option value="F:/">F/..</option>
				</select>
				<select name="type" class="form-control">
					<option value=".php">.php</option>
					<option value=".html">.html</option>
				</select>
				<input type="text" name="name"  class="form-control" placeholder="Name Of Folder">
				<input type="submit" value="Create" class="btn btn-primary btn-block">
			</form>
		
	</div>

</body>
</html>