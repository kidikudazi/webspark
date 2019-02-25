<?php 

if (isset($_POST['crtbl'])) {
	# code...
	session_start();
	$tblname = $_POST['tablename'];
	$colnum = $_POST['colnum'];

	$_SESSION['tablename'] = $tblname;
	if ($colnum == 1) {
		# code...
		echo "<form method = 'post'>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val1' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo " <center><button type= 'submit' class = 'btn btn-primary btn-xs' name = 'cmptdb1'>save</button></center>";
		echo " </form> ";
	}elseif ($colnum == 2) {
		# code...
		echo "<form method = 'post'>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val1' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val2' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo " <center><button type= 'submit' class = 'btn btn-primary btn-xs' name = 'cmptdb2'>save</button></center>";
		echo " </form> ";
	}elseif ($colnum == 3) {
		# code...
		echo "<form method = 'post'>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val1' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val2' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val3' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo " <center><button type= 'submit' class = 'btn btn-primary btn-xs' name = 'cmptdb3'>save</button></center>";
		echo " </form> ";
	}elseif ($colnum == 4) {
		# code...
		echo "<form method = 'post'>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val1' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val2' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val3' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val4' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo " <center><button type= 'submit' class = 'btn btn-primary btn-xs' name = 'cmptdb4'>save</button></center>";
		echo " </form>";
	}elseif ($colnum == 5) {
		# code...
		echo "<form method = 'post'>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val1' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val2' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val3' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val4' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val5' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo " <center><button type= 'submit' class = 'btn btn-primary btn-xs' name = 'cmptdb5'>save</button></center>";
		echo " </form>";
	}elseif ($colnum == 6) {
		# code...
		echo "<form method = 'post'>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val1' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val2' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val3' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val4' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>"; 
		echo " <input type ='text' name = 'val5' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo "<div class = 'form-group'>";
		echo " <input type ='text' name = 'val6' class = 'form-control' placeholder='field name'> ";
		echo "</div>";
		echo " <center><button type= 'submit' class = 'btn btn-primary btn-xs' name = 'cmptdb6'>save</button></center>";
		echo " </form>";
	}
}


 ?>