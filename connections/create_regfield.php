<?php 
$success = "";
 
//<p align="center"><small><font color="green">Specify the content of you desired registration page</font></small></p>
if(isset($_POST['crtreg'])){
	session_start();  

	$regnum = $_POST['regnum']; 

    $_SESSION['count'] = $regnum; 

  if ($regnum == 1) { echo "<form method='post'>"; echo "<div class='form-group'><input type= 'text' class='form-control' name='val1' placeholder = 'field name' required></div><center><button type='submit' name = ' cmptreg1' class='btn btn-success btn-sm'>done</button></center></form>";
	# code...
	}elseif ($regnum == 2) {
			# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg2' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 3) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg3' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 4) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val4' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg4' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 5) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val4' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val5' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg5' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 6) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val4' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val5' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val6' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg6' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 7) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val4' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val5' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val6' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val7' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg7' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 8) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val4' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val5' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val6' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val7' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val8' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg8' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 9) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val4' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val5' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val6' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val7' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val8' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val9' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg9' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}elseif ($regnum == 10) {
		# code...
		echo "<form method='post'>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val1' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val2' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val3' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val4' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val5' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val6' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val7' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val8' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val9' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<input type = 'text' name= 'val10' placeholder ='field name' class = 'form-control' required>";
		echo "</div>";
		echo "<center><button type='submit' name = 'cmptreg10' class='btn btn-success btn-sm'>done</button></center>";
		echo "</form>";
	}
}

 ?>