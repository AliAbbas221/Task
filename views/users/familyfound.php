<!DOCTYPE html>
<html>
<body>

<head>
	<title>Family founded</title>
</head>
<body>
	<table>
		<tr>
			<th>Fname</th>
			<th>Mname</th>
            
			<th>lname</th>
			<th>familycount</th>
            
			<th>phone</th>
			<th>status</th>
            
            
		</tr>
		<?php foreach ($results as $row): ?>
			<tr>
            <td> <input type="hidden" name='id' value='<?php echo $row['id']; ?>'></td>
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['familycount']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['status']; ?></td>
		</tr>
		<?php endforeach; ?></table>
</body>
</html>