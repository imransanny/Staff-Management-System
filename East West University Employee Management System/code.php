<?php
session_start();
require 'dbcon.php';
if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM employee WHERE nid= $student_id";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: employeeList.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: employeeList.php");
        exit(0);
    }
}

if (isset($_POST['delete_employee'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_employee']);

    $query = "DELETE FROM employee WHERE nid= $student_id";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: employeeSalaryList.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: employeeSalaryList.php");
        exit(0);
    }
}

if (isset($_POST['delete_workhour'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_workhour']);

    $query = "DELETE FROM workhour WHERE phone= $student_id";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: workhourList.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: workhourList.php");
        exit(0);
    }
}


if (isset($_POST['update_student'])) {

    $student_id = mysqli_real_escape_string($con, $_POST['nid']);

    $nid = mysqli_real_escape_string($con, $_POST['nid']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $designation = mysqli_real_escape_string($con, $_POST['designation']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $salaryRate = mysqli_real_escape_string($con, $_POST['salary']);

    $query = "UPDATE employee SET nid='$nid', name='$name', email='$email', phone='$phone', password='$password',designation ='$designation', salaryRate=' $salaryRate',dob = '$dob'  WHERE nid='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: employeeList.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: employeeList.php");
        exit(0);
    }
}

if(isset($_POST['save_employee']))
{
    $nid = mysqli_real_escape_string($con, $_POST['nid']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $designation = mysqli_real_escape_string($con, $_POST['designation']);
    $dob = mysqli_real_escape_string($con, $_POST['date']);
    $salaryRate = mysqli_real_escape_string($con, $_POST['salary']);
    

    $query = "INSERT INTO employee (nid,name,email,phone,password,designation ,dob, salaryRate) VALUES ('$nid','$name','$email','$phone','$password','$designation','$dob','$salaryRate')";

    $query_run = mysqli_query($con, $query);
 
    if($query_run)
    {
       // $_SESSION['message'] = "Employee Created Successfully";
        header("Location: adminHomepage.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Created";
        header("Location: signUp.php");
        exit(0);
    }
}
if(isset($_POST['workInput']))
{
    $enter = mysqli_real_escape_string($con, $_POST['enter']);
    $exit = mysqli_real_escape_string($con, $_POST['exit']);
        $phone = $_SESSION['sesPhone'];

    
    $sQL = "SELECT name FROM employee WHERE phone = '$phone'";
    
    $sql_run = mysqli_query($con, $sQL);
    $employee = mysqli_fetch_array($sql_run);
    $name = $employee['name'];

    echo $name;
    $query = "INSERT INTO workhour (name,phone, inTime, outTime ) VALUES ('$name','$phone','$enter','$exit')";
    
    $result = mysqli_query($con, $query);  
    //$interval = $exit->diff($enter);
        //echo $interval->format('%h');
        if($result){
            echo "added";
            header("Location: employeeHomepage.php");
        }
        else{
            echo "failed";
        }

        
}
if(isset($_POST['event'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $venue = mysqli_real_escape_string($con, $_POST['venue']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $query = "INSERT INTO event (name, venue, date) VALUES('$name','$venue','$date')";
    $result = mysqli_query($con, $query);

    if($result){
        echo "added";
        header("Location: adminHomepage.php");
    }
    else{
        echo "failed";
    }
}

        

?>