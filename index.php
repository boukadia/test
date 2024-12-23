<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host='localhost';
    $username='root';
    $password='';
    $database = 'test2';
    $connect=mysqli_connect($host,$username,$password,$database);
    $query="select * from role ";
    $result=mysqli_query($connect,$query);
    $row=mysqli_fetch_assoc($result);
    // $rows=result->fetch_assoc();
    
    

     ?>


    <form action="envoyer.php" method="POST">
        <input type="text" name="nom" id="">
        <input type="url" name="email" id="">
        <input type="number" placeholder="role" name="role" id="">
        <input type="submit" name="submit" id="">
        <select name="role" id="" >
            <option value="<?php echo htmlspecialchars($row['id']) ?>"><?php echo htmlspecialchars($row['nom']) ?></option>;
            
        </select>
       
    </form>
</body>
</html>