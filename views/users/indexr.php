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
			<th></th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $result): ?>
            <tr>
               <!-- <td><?php  echo 'true'?></td> -->
                <td><?= $result->getfname(); ?></td>
                <td><?= $result->getlname(); ?></td>
               
                <td><?= $result->getfname() ?></td>
                <td><?= $result->getlname() ?></td>
                <td>
                   <!-- <form method='POST' action='/darrebni5/buycourse/<?php echo $result->getId();?>'><button>Buy</button></form> -->

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
	<tfoot><?php  echo 'true'?></tfoot>
</table>
</body>
</html>