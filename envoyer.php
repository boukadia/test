<?php 
      
         $host='localhost';
         $username='root';
         $password='';
         $database = 'test2';
         $connect=mysqli_connect($host,$username,$password,$database);

        $submit=$_POST["submit"];

        
        $nom=$_POST["nom"];
        $email=$_POST["email"];
        $role=$_POST["role"];
        $query="insert into user(nom,email,roleID) values ('$nom','$email','$role') ";
        $result=mysqli_query($connect,$query);
        ?>