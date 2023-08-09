<?php require '../Controller/registration.php'; ?>
<!DOCTYPE html>  
 <html>  
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="../Asset/regi.css">
</head>
      <body>  
           <br />  
           <div class="container">  
                <h2 >Registration</h2><br />
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  

                     <!-- Name validation-->

                     <label>Name</label> 
                     <input type="text" name="name" class="form-control"  />
                      <span class="error">* <?php echo $nameErr;?></span> <br/><br>

                     <!-- Phone validation-->

                     <label>Phone</label> 
                     <input type="text" name = "phone" class="form-control"  />
                     <span class="error">* <?php echo $phoneErr;?></span>
                     <br /><br>

                     <!-- Email validation-->
                     
                     <label>E-mail</label> 
                     <input type="text" name = "email" class="form-control"  />
                     <span class="error">* <?php echo $emailErr;?></span>
                     <br /><br>

                     <!-- Username validation-->

                     <label>User Name</label>  
                     <input type="text" name = "username" class="form-control" />
                     <span class="error">* <?php echo $userErr;?></span>
                     <br /><br>

                     
                     <!-- Pass validation-->
                
                     <label>Password</label>  
                     <input type="password" name = "password" class="form-control" />
                     <span class="error">* <?php echo $passErr;?></span>
                     <br /><br>
                     <label>Confirm Password</label>  
                     <input type="password" name = "cnfrmPass" class="form-control" />
                     <span class="error">* <?php echo $confrmPassErr;?></span>
                     <br /><br>

                     <!-- Gender validation-->

                    <label>Gender</label> 
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label>
                     <span class="error">* <?php echo $genderErr;?></span>
                    
                     <br><br>

                     <!-- DOB validation-->

                     <label>Date of Birth:</label> 
                     <input type="date" name="dob"> 
                     <span class="error">* <?php echo $dobErr;?></span>
                     <br><br>
                     <button type="submit">Register</button>
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                    <br><br>
                    <p>Already have an account? <a href="#">Login here</a></p>
                </form> 
                <?php  include '../Controller/footer.php'; ?> 
           </div>  
           <br />  
      </body>  
 </html>  