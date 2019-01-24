<?php
include_once 'dbConnect.php';  //using the database connetion file to connect 


$employeeID=$_REQUEST['employeeID']; //getting the employee id from the URL
$msg=base64_decode($_REQUEST['msg']); //getting the message from the url and decoding the messafe
$sql = "SELECT * FROM w1673700_Employee WHERE w1673700_empId='$employeeID'"; //getting the details of the user from the DB using ID
$runquery = mysqli_query($conn,$sql); // running the query 
$emplyee_data=mysqli_fetch_array($runquery);  //inserting all data from the query to the array 
?>
<html>
    <head></head>
    <body>
        <h1> NEW EMPLOYEE CONFIRMATION </h1>
        <p><?php echo $msg; ?> </p>
        <p>Your Added Employee <b>ID</b> is <?php echo $emplyee_data['w1673700_empId'];?>
        <p>Your Added Employee <b>Name</b> is <?php echo $emplyee_data['w1673700_empFullName'];?>
        <p>Your Added Employee <b>Postion</b> is <?php echo $emplyee_data['w1673700_empPosition'];?>
        <p>Your Added Employee <b>E-mail</b> is <?php echo $emplyee_data['w1673700_empEmail'];?>
        <p>Your Added Employee <b>Company</b> Code is <?php echo $emplyee_data['w1673700_compCode'];?>
        
    </body>

</html>



