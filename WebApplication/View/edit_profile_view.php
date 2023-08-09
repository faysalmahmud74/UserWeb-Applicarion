<?php include '../Controller/header.php'; ?>
<!DOCTYPE html>  
 <html>  
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="../Asset/styles.css">
           <title>Edit Profile</title>
       <style>
        .error{
          color: red;
        }
       </style>
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 >Edit Profile Information: </h3><br />
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body> 
<br><br>

<!-- Name validation-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label>Name</label> 
<input type="text" name="new_name" class="form-control"  />
<span class="error">* <?php echo $nameErr;?></span> <br/><br>

<!-- Phone validation-->

<label>Phone</label> 
<input type="text" name = "new_phone" class="form-control"  />
<span class="error">* <?php echo $phoneErr;?></span>
<br /><br>

<!-- Email validation-->
                     
<label>E-mail</label> 
<input type="text" name = "new_email" class="form-control"  />
<span class="error">* <?php echo $emailErr;?></span>
<br /><br>
<button type="submit">Save</button>
</form>
<button class="back-button" onclick="history.back()">Back</button>
<?php include '../Controller/footer.php'; ?>

