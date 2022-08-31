<html>
<head>
<title>index</title>
</head>
<body>
<center>

<form action="database.php" method="post">

<table border="5" height="200" width="800">
<tr>
<td colspan="2"><center><h2>FILL THE DETAILS FOR SHORT OUT PASS<br>(Valid For 45 Minutes)</h2></center>
</td>
</tr>
<tr>
<td colspan="2"><h3><input type="text" placeholder="Enter Name" id="name1" name="name1" /></td>
</tr>
<tr>
<td><input type="number" placeholder="Year"name="year1" id="year1" min="1" max="4"/></td>
<td><select name="branch1" id="branch1"  >
<option value="select option">Branch</option><option value="CS">CS</option><option value="ME">ME</option><option value="EC">EC</option><option value="CE">CE</option><option value="EN">EN</option>
<option value="DIPLOMA">DIPLOMA</option><option value="BCA">BCA</option><option value="BBA">BBA</option><option value="MBA">MBA</option></select>
</td>
<tr>
<td><input type="text"placeholder="Purpose" name="purpose1" id="purpose1" /></td>
<td><input type="date" placeholder="Enter Date" name="date1" id="date1" min="2022-01-01" max="2022-12-31"></td>
</tr>
<tr>
<td>Time Out:<input type="time"placeholder="Time out" name="tout1" id="tout1"  min="07:00" max="19:15" required /></td>
<td>Time In:<input type="time" placeholder="Time in" name="tin1" id="tin1" min="07:10" max="20:00" /></td>
</tr>
</table>
<a href="database.php" ><input type="submit" value="Click Here" name="sub" /></a>
</center>

</body>
</html>
