<?php
	$name1 = $_POST['name1'];
	$branch1 = $_POST['branch1'];
	$year1 = $_POST['year1'];
	$purpose1 = $_POST['purpose1'];
	$tin1 = $_POST['tin1'];
	$tout1 = $_POST['tout1'];
	$date1=$_POST['date1'];
	$conn = new mysqli('localhost','root','','hostel_pass_project');
	if($conn ->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pass(name, branch, year, purpose, timein, timeout,date) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssissis", $name1, $branch1, $year1, $purpose1, $tin1, $tout1, $date1);
		$execval = $stmt->execute();
		echo $execval;
		echo "<center>";
		echo "<h1>Your Pass Generated Successful... ";
		
		$stmt->close();
	$conn->close();
	
	}
	?>
<html>
<head><title>process</title></head>
<body>
<center>
<table border="5" height="120" width="800">
<tr>
<td colspan="2"><center><h3>ALLENHOUSE COLLEGES,ROOMA KANPUR(U.P.)<br />
     (VIVEKANAND BOYS HOSTEL)<br />
        SHORT OUT PASS<br />
	(VALID FOR 45 MINUTES ONLY)</h3>
</center></td>
</tr>
<tr>
<td colspan="2"><h4><b>Name</b>=<?php echo $name1; ?><br /></td>
</tr>
<tr>
<td>Year=<?php echo $year1; ?></td>
<td>Branch=<?php echo $branch1; ?></td>
<tr>
<td>Purpose=<?php echo $purpose1; ?></td>
<td>Date:=<?php echo $date1; ?></td>
</tr>
<tr>
<td>Time Out=<?php echo $tout1; ?></td>
<td>Time In=<?php echo $tin1; ?></td>
</tr>
</table>

	