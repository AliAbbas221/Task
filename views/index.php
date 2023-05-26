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
				<td><?php echo $row['familycount']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<form action="/addfamily/addfamily" <?php echo $row->getId()?> >
					<input type="submit" name='addfamily' value='Add Family'>
				</form>

				<form action="/addfamily/editfamily" <?php echo $row->getId()?> >
					<input type="submit" name='editfamily' value='Edit Family'>
				</form>

				<form action="/addfamily/deletefamily" <?php echo $row->getId()?> >
					<input type="submit" name='deletefamily' value='Delete Family'>
				</form>
				
                

			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>