<?php



        
if(isset($_POST['submit'])){ //checking whether the POST method is used in the form (POST method in form is set or not)
    
include_once 'dbConnect.php'; //using the db connect file to connect to database


$employeeID = $_POST["w1673700_empId"]; //gettting the data passed from the form through $_Post Super Global and storing it to $emplooyeeID variable
$employeeFullName = $_POST["w1673700_empFullName"]; 
$employeePosition = $_POST["w1673700_empPosition"]; 
$employeeEmail = $_POST["w1673700_empEmail"];
$companyCode = $_POST['w1673700_compCode'];

//Error Handlers
//checking whether the all fields are filled or not (empty fields)
    if(empty($companyCode) || empty($employeeID) || empty($employeeFullName) || empty($employeePosition) || empty($employeeEmail)){
        header("Location: addemployee_advanced.php?signupform=Form is Empty");
        exit();

    } else {
        //check if input characters are valid (Should be int
        if (!filter_var($employeeID, FILTER_VALIDATE_INT)){ //checking the employee id is valid or not
            header("Location: addemployee_advanced.php?employeeid=Invalid Employee ID");
            exit();
            
        } 
        else 
            { 
            //checking the employee name is valid or not
            if(!preg_match("/^[a-zA-Z]*$/", $employeeFullName) || !preg_match("/^[a-zA-Z]*$/", $employeePosition )){
              header("Location: addemployee_advanced.php?employeename=Invalid Employee Name");
                exit();  
            } 
            else {
                //checking whether a valid emails entered or not
                if(!filter_var($employeeEmail, FILTER_VALIDATE_EMAIL)){
                   header("Location: addemployee_advanced.php?employeeEmail=Invalid Employee Email");
                    exit(); 
                }
                else{
                  // Insert the Employee Details to the Database   
                 $sql = "INSERT INTO w1673700_Employee(w1673700_empId,w1673700_empFullName,w1673700_empPosition,w1673700_empEmail,w1673700_compCode) VALUES ('$employeeID','$employeeFullName','$employeePosition','$employeeEmail','$companyCode');";
                
                    if(mysqli_query($conn, $sql)){
                        $msg = base64_encode("Your New Employee Has Been Added Successfully"); //encoding the message sent through URL
                        header("Location:getemployee.php?msg=$msg&employeeID=$employeeID");
                        
                    }
                    else {
                       $msg = base64_encode("Your New Employee Has Not Been Added Successfully");
                       header("Location:getemployee.php?msg=$msg");  
                        
                        
                    }
                }
                
            }
            
        }
        
    }

} else {
    header("Location: addemployee_advanced.php");
    exit();
}

?>

