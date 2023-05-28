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
        <input type="text" name="status" value=<?= $re->getstatus()?>><br>
        <label for="location">Location:</label>
  <select name="location" id="location" value=<?= $re->getlocation()?>>
    <option value="North">North</option>
    <option value="East">East</option>
    <option value="West">West</option>
    <option value="South">South</option>
  </select>

        <input type="submit" value="Edit">

    </form>
</center>
</body>
</html>