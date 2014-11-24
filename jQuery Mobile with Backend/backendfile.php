<!DOCTYPE html>
<html>

<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>

<body>
<center><?php echo date("l, F j, Y") ?></center>
<HR>

<table border="2" style="width:100%">
<caption>Thank You</caption>
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Home Phone Number</th>
	<th>Mobile Phone Number</th>
	<th>Address</th>
	<th>Gender</th>
	<th>Checkbox</th>
</tr>
<tbody align="center">
<tr>
	<td><?php echo $_POST['firstname'] ?></td>
	<td><?php echo $_POST['lastname'] ?></td>
	<td><?php echo $_POST['homePhone'] ?></td>
	<td><?php echo $_POST['cellPhone'] ?></td>
	<td><?php echo $_POST['address'] ?></td>
	<td><?php echo $_POST['select-choice-a'] ?></td>
	<td>
		<?php 
			if($_POST['agree']){
				echo "I Agree";
			}
			else{
				echo "I Disagree";
			}
		?>
	</td>
</tr>
</tbody>
<tr>
	<th colspan="7">Suggestion</th>
</tr>
<tbody align="center">
<tr>
	<td colspan="7"><?php echo $_POST['suggestion'] ?></td>
</tr>
</tbody>
</table>

</body>
</html>