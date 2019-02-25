<?php include('connections/demo_reg.php'); ?>
<?php include('header.php'); ?>
<div class="container-fluid" >
	<div class="jumbotron">
	<p align="center"><font size="40" color="red">Q</font><font color="green">UICKEN</font></p>		
	</div>	
</div>

<div class="container-fluid">
	<div class="well">
	<p align="center"><font color="blue"> <?php echo $success; ?> </font></p>
	<h3><font color="green">Select the number of fields that you might need</font></h3>
		<form method="post">
			<select name="regnum" class="form-control">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			<br>
			<center><button  type="submit" class="btn btn-info" name="crtreg">create</button></center>	
		</form>
		<br>
		<?php include('connections/create_regfield.php') ?>
	</div>	
</div>

</body>
</html>