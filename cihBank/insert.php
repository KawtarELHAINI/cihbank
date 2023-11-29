<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La liste des employées</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>">
    <label>username:</label>
    <input type ="text" name="username" ><br>
    <label>date de naissance :</label><br>
    <input type ="text" name="date" ><br>
    <label>salary:</label>
    <input type ="text" name="salary" ><br>
    <input type ="submit" name="submit" ><br>
    <a href="insert.php">Create</a>
    <a href="select.php"></a>
    
</body>
</html>