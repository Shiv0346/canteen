<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .center{
            position:fixed;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%); 
            padding: 10px;


        }
        .center input{
            padding:10px;
            font-size:16px;
            margin:5px;
            
        }


    </style>
</head>
<body>





<div class="center">

   <!-- <h1 class ="center">Welcome To Login Page</h1> -->
   <br>
   <form action="login.php"  method = "POST"  >
    <fieldset>
    <legend>Log In</legend>
  
   <label for="firstname">Email</label>
   <input type="text" placeholder ="email" name = "email" style="padding:10px; margin-left:30px;"required>
   <br>
   <br>
   <label for="password">Password</label>
   <input type="password" placeholder = "password" name="password" style="padding:10px;">
   <br>
   <br>     
   <input type="submit" value ="Log In" style="margin-left:70px;">

</fieldset>


 </form>

</div>
    
</body>
</html>