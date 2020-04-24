<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'sac19'); 
	$query = mysqli_query($con, "SELECT * FROM post"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/block.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body><a href="http://covid-19/index.html">
			<button class="home" style="outline: none;">На главную</button>
		</a>
	<div class="head">
	<h1 class="headtextserv" style="left:25%">Советы</h1>
	</div>
<div class="box">
	<div class="col-12 row">
		<div class="col-1"></div>
		<div class="col-3">
			<?php for($i = 0; $i < $query->num_rows; $i++) {
		$res = $query->fetch_assoc();?>
				<h4><?php echo $res['heading']; 'class="headtextserv">' ?></h4>
				<?php echo '<img src="' . $res['img'] . '" class="w-100">' ?>
				
		<?php } ?>
		</div>
		<div class="col-1"></div>
	</div>
</div>
 <audio autoplay="" loop="">
 	<source src="bgm.mp3" type="audio/mp3">
  </audio>
</body>
</html>