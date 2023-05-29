<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
   
</head>
<body>
    <table>
        <tr>
            <td>Fname</td>
            <td>Mname</td>
            <td>Lname</td>
            <td>phone</td>
            <td>Family mymber</td>
            <td>Location</td>
        </tr>
        <tr>
        
<?php


//print_r($results);
foreach($results as $r =>$value): ?>
    
 <td><?= $value['fname']; ?></td>
    <td><?= $value['mname']; ?></td>
    <td><?= $value['lname']; ?></td>
    <td><?= $value['phone']; ?></td>
    <td><?= $value['familycount']; ?></td>
    <td><?= $value['location']; ?></td>
    
    <?php endforeach ?>  
    
    <a href=" /Task/">Home</a>
        
        </tr>
    </table>
    </body>
    </html>
