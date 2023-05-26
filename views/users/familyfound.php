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
            <th>Fname</th>
            <th>Mname</th>
            <th>Lname</th>
			<th>Number</th>
            <th>Status</th>
            <th>Phone</th>
            <th>Location</th>
          
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $result): ?>
            <tr>
              <td><? echo 'turesdkljnkl'?></td>
                <td><?= $result->getfname(); ?></td>
                <td><?= $result->getmname(); ?></td>
                <td><?= $result->getlname(); ?></td>
                <td><?= $result->getnumber(); ?></td>
             
                <td><?= $result->getstatus(); ?></td>
                <td><?=$result->getphone(); ?></td>
                <td><?= $result->getlocation(); ?></td>
              

               
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>