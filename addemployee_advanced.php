
<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <style>
             
input[type="text"],[type="email"] ,select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


div {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
    }
    
 h1{
     font-family: arial;
     font-size: 2em;
        
    }
 p{
    font-size: 20px;
  }
  
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: round;
    font-size: 16px;
    margin: 4px 6px;
    cursor: pointer;
    border-radius: 12px
    
  }
  .error{
      
     color:red;
  }
  
  <?php
//$signupform = $signupempId = $signupempName = $signupEmail = '';

$signupform=$_REQUEST['signupform'];
$signupempId=$_REQUEST['employeeid'];
$signupempName=$_REQUEST['employeename'];
$signupEmail=$_REQUEST['employeeEmail'];

?>
  
  </style>


       
       
        
    </head>
    <body bgcolor="#419b9b">
        <h1>Add a New Employee</h1>
        
        <hr>
        
        
        <div>
        <table>
            <p><b>Please fill the form below to add an employee</b></p>
            <span class="error"> <?php echo $signupform ?></span>
        <form action = "submit.php" method="POST">
            <tr>
                <td> *Employee ID :&nbsp;&nbsp;&nbsp;</td> 
                <span class="error"> <?php echo $signupempId ?></span>
                <td><input type="text" name="w1673700_empId" placeholder="Employee ID"></td>
            </tr>
                
            
            <tr>
                <td>*Full Name   :&nbsp;&nbsp;&nbsp;</td>  
                <span class="error"> <?php echo $signupempName ?></span>
                <td> <input type="text" name="w1673700_empFullName" placeholder="Employee Full Name"></td>
            </tr>
           
           <tr>
               <td> *Position    :&nbsp;&nbsp;&nbsp;</td> 
               <span class="error"> <?php echo $signupEmail ?></span>
               <td>  <input type="text" name="w1673700_empPosition" placeholder="Position"></td>
           </tr> 
           
            
            <tr>
                <td>*E-mail      :&nbsp;&nbsp;&nbsp;</td>                
                <td>  <input type="text" name="w1673700_empEmail" placeholder="E-mail"> </td>
            </tr>
                
            
            <tr>
                <td>*Company Code:&nbsp;&nbsp;&nbsp;</td>
                <td>   <select name ="w1673700_compCode">
                           <option value ="10"> 10 </option>
                           <option value ="20"> 20 </option>
                           <option value ="30"> 30 </option>
                           <option value ="40"> 40 </option>
                        </select>
                </td>
            </tr>
            
            <tr>
                <td><button class="button" type="submit" name="submit"> Submit </button>&nbsp;&nbsp;</td>
                
                <td><button class="button" type="reset" name="reset"> Reset </button></td>
            </tr>
        </table>    
        </form>
        </div>
        
        
    </body>
</html>
