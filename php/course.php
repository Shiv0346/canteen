<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/course.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>

<div class="blocker"> </div>
 <section class="background">

            <nav>
                <a href="logo.html"><img src="../images/kbclogo.png"></a>
                    <div class="nav-links" id="navLinks">
                      
                        
                        <ul>
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="#">Course</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a onclick="openForm()">Log In</a></li>
                            <li><a onclick="openRegister()">Register</a></li>
                        </ul>
                    </div>
                    
            </nav>

 </section>

 <section>
    <h2>Bachelor In Computer Application</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
         Quasi ea harum voluptate provident hic. Recusandae illo consequuntur
          totam iste, quibusdam aliquid rerum, similique, iure possimus nam velit
           nostrum corrupti accusamus!</p>
 </section>
 <section>
    <h2 style="display:block;">Bachelor In Business Studies</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Molestias deserunt repellendus tempore, delectus magni, facilis labore
        esse aspernatur tempora, fugiat
        voluptatum optio nobis voluptates expedita suscipit harum ex non magnam!
    </p>
 </section>

 <div class="footer">
    <div class="row">
        <div class="footer-cols">
            <img src="../images/samriddhilogo.png" alt="photo of library">

        </div>
        <div class="facilities-cols">
           <h3>Useful Links</h3>
           <p><a href="about.php">&#9654; About Us</a></p>
           <p><a href="Course.php">&#9654; Course</a></p>
           <p><a href="blog.php">&#9654; Blogs</a></p>
           <p><a href="notice.php">&#9654; Notice</a></p>
           <p><a href="careerlab.php">&#9654; Career Service Lab</a></p>
        
          
        </div>
        <div class="facilities-cols">
            <h3>Contact Us</h3>
            <p><a href="https://goo.gl/maps/3dPFLCqmuuQfodeU7"> &#xf3c5;  Banasthali, Balaju, Kathmandu, Nepal</a></p>
            <p><a href="info@kbcampus.edu.np">info@kbcampus.edu.np</a></p>
            <p><a href="01-4-983777/01-4-984777/9801390591">01-4-983777/01-4-984777</a></p>

            <h3>Follow Us</h3>

             <div class="icons">
            <!-- Facebook -->
            <a href="https://www.facebook.com/KBCampus"><i class="fa fa-facebook"></i></a>
            <a href="https://www.facebook.com/KBCampus"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/KBCampus"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/KBCampus"><i class="fa fa-linkedin"></i></a>
            </div>

        </div>
    </div>



</div>

<!-- popup login form ---------------------------------- -->


<div class="form-popup" id = "myForm">
    


<legend>Log In</legend>
   <!-- <h1 class ="center">Welcome To Login Page</h1> -->
   <br>
   <form action="login.php"  method = "POST" class="form-container" >
  
   <label for="firstname">Email</label>
   <input type="text" placeholder ="email" name = "email" style="padding:10px; margin-left:30px;"required>
   <br>
   <br>
   <label for="password">Password</label>
   <input type="password" placeholder = "password" name="password" style="padding:10px;">
   <br>
   <br>     
   <input type="submit" value ="Log In">




 </form>

</div>

<!-- <div class="register">

<form action="register.php"  method = "POST" class="form-container" >

<input type="text" placeholder ="username" name = "email" required>
<br>
<br>
<input type="password" placeholder = "password" name="password" >
<br>
<br>     
<input type="submit" value ="Log In">


</form>


</div>


 -->

    <!-- --------------javascript for toggle menu----- -->
    
    <script>
    
        var blocker = document.querySelector(".blocker");
        blocker.addEventListener("click",closeForm);
    

       
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("myForm").style.zIndex = 2;
  blocker.style.zIndex = 2;

}

function closeForm() {
  document.getElementById("myForm").style.display ="none" ;
  blocker.style.zIndex = -1;
}

    </script>
</body>
</html>