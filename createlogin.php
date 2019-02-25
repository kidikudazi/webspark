<?php include('connections/create_loginpage.php'); ?>
<?php include('header.php'); ?>
<div class="container-fluid">
	<div class="jumbotron">
	<p align="center"><font size="40" color="red">Q</font><font color="green">UICKEN</font></p>		
	</div>	
</div>

<div class="container-fluid">
	<div class="well">
	<p align="center"><font color="blue"> <?php echo $success ?> </font></p>
	<p align="center"><small><font color="green">Specify the content of you desired login page</font></small></p>
		<form method="post">
			<div class="form-group">
				<input type="text" name="val1" placeholder="email/username" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="text" name="val2" placeholder="password/none" class="form-control" required>
			</div>
			<center><button  type="submit" class="btn btn-info" name="crtlogin">create</button></center>	
		</form>
	</div>	
</div>

</body>
</html>