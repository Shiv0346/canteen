<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>

<div class="blocker"> </div>
 <section class="background">

            <nav>
                <a href="logo.html"><img src="../images/kbclogo.png"></a>
                    <div class="nav-links" id="navLinks">
                      
                        
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="course.php">Course</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a onclick="openForm()">Log In</a></li>
                            <li><a onclick="openRegForm()">Register</a></li>
                        </ul>
                    </div>
                    
            </nav>
            <div class="text-box">
                <h1>Kathmandu Business Campus </h1>
                <h2>Owned and Managed By samriddhi School</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, ducimus <br> voluptates quod laudantium necessitatibus sunt</p>
                <a href="about.htm" class = "visit-btn">Visit us to Know more</a>
            </div>
        </section>


  

  
  <!-- ------course------- -->
  <div class = "course">
    <h1>Bachelor Level Program</h1>
    <div class="row">
    <div class="course-col">
      <h3>Bachelor In Computer Application</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos enimfacilis repellendus nemo error illo accusamus magnam vero earum quia eius repudiandae,
         ipsam ea saepe quas cum delectus fuga doloribus.</p>
    </div>
    <div class="course-col">
        <h3>Bachelor In Computer Application</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos enimfacilis
           repellendus nemo error illo accusamus magnam vero earum quia eius repudiandae,
           ipsam ea saepe quas cum delectus fuga doloribus.</p>
      </div>
  </div>
</div>



<!-- ------------------facilities------------->

<div class="facilities">

    <h1>Our Facilities</h1>
    <p> this is that what  is that idfsfjksjfkffjfksfjk </p>
    <div class="row">
        <div class="facilities-cols">
            <img src="../images/library.png" alt="photo of library">
            <h3>library</h3>
            <p>this is fsjfksjfsakfjsafksajfksafjsakfsaffds</p>
        </div>
        <div class="facilities-cols">
            <img src="../images/library.png" alt="photo of canteen">
            <h3>Canteen</h3>
            <p>this is fsjfksjfsakfjsafksajfksafjsakfsaffds</p>
        </div>
        <div class="facilities-cols">
            <img src="../images/library.png" alt="photo of play ground">
            <h3>Play Ground</h3>
            <p>this is fsjfksjfsakfjsafksajfksafjsakfsaffds</p>
        </div>
    </div>
</div>

<div class="aboutus">   
    
    <p >
        KBC is an enterprise of Samriddhi School for providing higher quality education in thefield of management and Information
        Communication Technology (ICT). We aim to producewell-qualified 
        graduates through competent management and ICT education, and our 
        graduates will be the backbone for economic development and prosperity 
        of the nation....</p>
</div>

<div class="footer">
    <div class="row">
        <div class="footer-cols">
            <img src="../images/samriddhilogo.png" alt="photo of library">

        </div>
        <div class="facilities-cols">
           <h3>Useful Links</h3>
           <p><a href="about.php">&#9654; About Us</a></p>
           <p><a href="course.php">&#9654; Course</a></p>
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
   <form action="login.php"  method = "POST"  >
  
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

<div class="center" id = "myRegForm">   

    <form action="admin_register.php" method="POST">
        
   
    <legend>Admin Registration Form</legend>
    <br>
    <br>

    <!-- <label for="fname">Full Name</label> -->
    <input type="text" name="fname"  placeholder="First" required/>
    <!-- <label for="mname">Middle Name</label> -->
    <input type="text" name="mname"  placeholder="middlename"/>
    <!-- <label for="lname">Last Name</label> -->
    <input type="text" name="lname"  placeholder="Lastname" required/>
    
    <!-- <label for="phone">Phone No:</label> -->
    <input type="number" name="phone"  placeholder="Phone no " required/>
    
    <!-- <label for="email">Email</label> -->
    <input type="email" name="email"  placeholder="sample@gmail.com" required/>
    
    <!-- <label for="address">Address</label> -->
    <input type="text" name="address"  placeholder="Address" required/>  
     
    <input type="password" name="password"  placeholder="password" required/>
    
    <input type="conform-password" name="connform-password"  placeholder="confirm password" required/>
    <br>
    <input type="submit"/>


    </form>
</div>




    <!-- --------------javascript for toggle menu----- -->
    
    <script>
    
        var blocker = document.querySelector(".blocker");
        blocker.addEventListener("click",closeForm);
        blocker.addEventListener("click",closeRegForm);

    

       
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("myForm").style.zIndex = 2;
  blocker.style.zIndex = 2;

}

function closeForm() {
  document.getElementById("myForm").style.display ="none" ;
  blocker.style.zIndex = -1;
}
function openRegForm() {
  document.getElementById("myRegForm").style.display = "block";
  document.getElementById("myRegForm").style.zIndex = 2;
  blocker.style.zIndex = 2;

}

function closeRegForm() {
  document.getElementById("myRegForm").style.display ="none" ;
  blocker.style.zIndex = -1;
}

    </script>
</body>
</html>