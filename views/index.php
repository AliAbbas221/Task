<!DOCTYPE html>
<html>
<head>
	<title>Display all elements from SQL table</title>
</head>
<body>
	<table>
		<tr>
			<th>Column 1</th>
			<th>Column 2</th>
		</tr>
		<?php foreach ($results as $row): ?>
			<tr>
            <td> <input type="hidden" name='id' value='<?php echo $row['id']; ?>'></td>
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                

			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>