<?php include('connections/create.db_table.php'); ?>
<?php include('header.php'); ?>

<div class="container">
	<div class="well">
	<?php echo $success ?>
	<?php echo $error ?>
	<form method="post">
		<div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
			<input type="text" name="tablename" placeholder="table name" class="form-control">			
			</div>
		</div>
		<div class="form-group">
		<p><font color="green">specify number of columns</font></p>
		<p><font color="red"><small>Notice: id and date-reg will automatically be added to table</small></font></p>
			<select name="colnum" class="form-control">
				<option></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
			
		</div>
		<center><button type="submit" class="btn btn-info" name="crtbl">create</button></center>
	</form>	
	<br>
	<?php include('connections/create_table.php'); ?>	
	</div>
</div>



</body>
</html>