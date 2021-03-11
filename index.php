<!DOCTYPE html>
<html>
<head>
	<title>Subscribe For More information</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<style type="text/css">
		body {
			transition-duration: 0.5s;
		}
		.color1 {
			background-color: #4285F4;
			transition-duration: 0.5;
		}
		.color2 {
			background-color: #DB4437;
			transition-duration: 0.5;
		}
		.color3 {
			background-color: #F4B400;
			transition-duration: 0.5;
		}
		.color0 {
			background-color: #0F9D58;
			transition-duration: 0.5;
		}
		.input {
			width: 100%;
			border: 0px;
			outline: 0;
			height: 60px;
			border-radius: 50px;
			padding-left: 20px;
			transition-duration: .5s;
			font-size: 14pt;
			font-family: Comic Sans MS;
		}
		.input:hover{
			transform: scale(1.05);
			transition-duration: .5s;
			font-size: 14pt;
		}
		.parent {
			line-height: 100vh;
		}
		.child {
			vertical-align: middle;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row parent">
			<div class="col-md-3 col-12 col-sm-12 col-lg-3 child">
				<div class="fixed-top text-center mt-5">
					<h1 style="color: #FFF;font-family: Comic Sans MS;">Flooders</h1>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-12 col-sm-12 child">
				<div class="form">
					<form action="" method="POST">
						<input type="email" name="email" class="input shadow" placeholder="Enter your email here." autocomplete="off">
					</form>
				</div>
			</div>
			<div class="col-md-3 col-12 col-sm-12 col-lg-3 child">
				
			</div>
		</div>
	</div>
	<div class="container-fluid" id="dashboard">
		
	</div>
	<?php
		if(isset($_POST['email'])){
			require "flooders-config.php";
			$email = $_POST['email'];
			$save = mysqli_query($connection, "INSERT INTO subscribers(email) VALUES('$email')");
			if($save){ header("location:/subscribe?msg=ok"); };
		}
	?>

	<script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	function changeColor(curNumber){
	    curNumber++;
	    console.log(curNumber)
	    if(curNumber > 3){
	        curNumber = 0;
	    }
	    document.body.setAttribute('class', 'color' + curNumber);
	    setTimeout(function(){changeColor(curNumber)}, 1000);
	}

	changeColor(0);
	})
	</script>
	<?php
		if(isset($_GET['msg'])){
			if($_GET['msg'] == 'ok'){
				?>
					<script type="text/javascript">
						$(document).ready(function(){
							alert("Subscribed !");
						})
					</script>
				<?php
			}
		}
	?>
</body>
</html>