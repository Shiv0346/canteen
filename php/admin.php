<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>


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
    
    
    <?php

    $roll = $_GET['id'];

    if(!empty($roll)) {
       
       ?>

    <div class="center">
    <form action="update.php" method="post">       
    
    
    <fieldset>

    <legend>Update Form</legend>

    <input type="hidden" name="id" value="<?php echo $roll;?>"/>
    <!-- <label for="fname">Full Name</label> -->
    <input type="text" name="fname"  placeholder="Fullname" required/>
    <br>
    <!-- <label for="mname">Middle Name</label> -->
    <input type="text" name="mname"  placeholder="middlename" />
    <br>
    <!-- <label for="lname">Last Name</label> -->
    <input type="text" name="lname"  placeholder="Lastname" required/>
    <br>
    <!-- <label for="phone">Phone No:</label> -->
    <input type="number" name="phone"  placeholder="Phone no" required/>
    <br>
    <!-- <label for="email">Email</label> -->
    <input type="email" name="email"  placeholder="sample@gmail.com" required/>
    <br>
    <!-- <label for="address">Address</label> -->
    <input type="text" name="address"  placeholder="Address" required/>  
    <br>  

    <input type="submit"/>

    </fieldset>
    </form>
    </div>

    <?php

    } else {

        ?>


    <div class="center">
   

    <form action="insert.php" method="post">
        
    <fieldset>
    <legend>Student Registration Form</legend>

    <!-- <label for="fname">Full Name</label> -->
    <input type="text" name="fname"  placeholder="Fullname" required/>
    <br>
    <!-- <label for="mname">Middle Name</label> -->
    <input type="text" name="mname"  placeholder="middlename"/>
    <br>
    <!-- <label for="lname">Last Name</label> -->
    <input type="text" name="lname"  placeholder="Lastname" required/>
    <br>
    <!-- <label for="phone">Phone No:</label> -->
    <input type="number" name="phone"  placeholder="Phone no " required/>
    <br>
    <!-- <label for="email">Email</label> -->
    <input type="email" name="email"  placeholder="sample@gmail.com" required/>
    <br>
    <!-- <label for="address">Address</label> -->
    <input type="text" name="address"  placeholder="Address" required/>  
    <br>  

    <input type="submit"/>

    </fieldset>
    </form>
</div>


<?php
    }
    ?>
    

    
</body>
</html>