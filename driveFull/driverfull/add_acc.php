<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Accident</title>
	<?php include 'main.php' ?>
</head>
<body>

	<style type="text/css">
		input , textarea{
			margin-bottom: 20px;
		}
		.bg{
			margin-top: 50px;
		}
		body{
            background-image:url("img/addaccident.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            background-position: center;
        }
        .boxshadow {
		    -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, -1px 1px 13px 1px rgba(0,0,0,0.45); 
			box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, -1px 1px 13px 1px rgba(0,0,0,0.45);
		}
	</style>
	<div class="bg">
	<div class="container boxshadow p-3 mt-3" align="center" style="width:600px;height: auto;opacity: ;"><br>
		<h2><b>Add Accident</b></h2><hr>
		<form action="sql/add_acc.php" method="post" enctype="multipart/form-data" >
			<input class="form-control" type="text" placeholder="Accidented Vehicle" name="vehi">
			<input  class="form-control" type="text" placeholder="Accidented Source" name="source">
			<textarea name="des" class="form-control" placeholder="Description"></textarea>
			<h3>Add Images</h3>
			<input class="form-control" type="file" name="pic1">
			<input class="form-control" type="file" name="pic2">
			<input class="form-control" type="file" name="pic3">
			<input type="submit" value="Add" class="btn btn-warning">
		</form>
	</div>
</div>
</body>
</html>