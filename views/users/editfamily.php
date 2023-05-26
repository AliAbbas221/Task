<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit</title>
  
</head>
<body>
<center>
    <form method="POST" action="">
        <label for="">fname:</label>
        <input type="text" name="fname"  value=<?= $re->getfname()?>><br>
        <label>mname:</label>
        <input type="text" name="mname" value=<?= $re->getmname()?>><br>
        <label>lname:<label>
        <input type="text" name="lname" value=<?= $re->getlname()?>><br>
        <label>number of family:</label>
        <input type="text" name="numberfamily" value=<?= $re->getnumber()?>><br>
        <label>phone number</label>
        <input type="number" name="phone" value=<?= $re->getphone()?>><br>
        <label>status</label>
        <input type="number" name="status" value=<?= $re->getstatus() ?>><br>
        <label>Location</label>
        <input typoe="text" name="location" value=<?= $re->getlocation() ?>>
        <input type="submit" value="add">

    </form>
</center>
</body>
</html>