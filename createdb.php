<?php include('connections/create_db.php'); ?>
<?php include('header.php'); ?>

<div class="container">
	<div class="well">
	<?php echo $success ?>
	<?php echo $error ?>
	<form method="post">
		<div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
			<input type="text" name="dbname" placeholder="database name" class="form-control">			
			</div>
		</div>
	    <center><button type="submit" class="btn btn-success" name="createdb">create</button></center>
	</form>		
	</div>
</div>

</body>
</html>