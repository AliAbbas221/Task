<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Page Title</title>
	
</head>
<body>
	

<h1>Families</h1>

<nav>
        
    </nav>
<table>
    <thead>
    <tr>
           <th>id </th>
            <th>Fname</th>
            <th>Mname</th>
            <th>Lname</th>
			<th>count family</th>
            <th>Status</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Email</th>
            <button>  <a href="addfamily"> add family</a></button>
            <button>  <a href="searchfamily"> search family</a></button>
                
        </tr>
    </thead>
    <tbody>
    <?php foreach ($results as $result) { ?>
    <tr>
        <td><?php echo $result->getid(); ?></td>
        <td><?php echo $result->getfname(); ?></td>
        <td><?php echo $result->getmname(); ?></td>
        <td><?php echo $result->getlname(); ?></td>
        <td><?php echo $result->getfamilycount(); ?></td>

        <td><?php echo $result->getphone(); ?></td>
        <td><?php echo $result->getstatus(); ?></td>
        <td><?php echo $result->getlocation(); ?></td>
    </tr>
<?php } ?>
    </tbody>
	<tfoot></tfoot>
</table>
</body>
</html>