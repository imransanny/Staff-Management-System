
<?php
session_start();
require 'dbcon.php';
    include('dbcon.php'); 
    if(isset($_POST['login_employee'])){ 

        $username = $_POST['phone'];  
        $password = $_POST['empPassword'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT *FROM employee WHERE phone='$username' AND password='$password'";  
        
        
        $result = mysqli_query($con, $sql);  
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['sesPhone'] = $username;
            header("Location: employeeHomepage.php");
            exit;  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
    }

    else if(isset($_POST['login_admin'])){

        $username = $_POST['email'];  
        $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT *FROM admin WHERE email='$username' AND adminPass ='$password'";

        $result = mysqli_query($con, $sql);  
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['sesEmail'] = $username;
            header("Location: adminHomepage.php");
            exit;  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }

    }

    else{
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }
?>  