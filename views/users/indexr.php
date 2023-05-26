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
            <form method="POST" action="addfamily"><button>Add Family</button></form>
            <form method="POST" action="searchfamily">
                <button>search Family</button>
            </form>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $result): ?>
            <tr>
               <!-- <td><?php  echo 'true'?></td> -->
                <td><?= $result->getfname(); ?></td>
                <td><?= $result->getmname(); ?></td>
                <td><?= $result->getlname(); ?></td>
                <td><?= $result->getnumber(); ?></td>
             
                <td><?= $result->getstatus(); ?></td>
                <td><?=$result->getphone(); ?></td>
                <td><?= $result->getlocation(); ?></td>
               <td> <form method="POST" action="editfamily/<?php echo $result->getId();?>"><button>Edit Family</button></form>
               </td>
               <td> <form method="POST" action="deletefamily/<?php echo $result->getId();?>"><button>Delte Family</button></form>
               </td>

               
            </tr>
        <?php endforeach ?>
    </tbody>
	<tfoot></tfoot>
</table>
</body>
</html>