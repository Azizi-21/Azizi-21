<!DOCTYPE html>
<html>
<style>
div {
  border: 0.5rem outset black;
  outline: 0.2rem solid khaki;
  box-shadow: 0 0 0 0rem skyblue;
  border-radius: 12px;
  font: bold 1rem sans-serif;
  margin: 2rem;
  padding: 1rem;
  outline-offset: 0.2rem;
}
input[type=text], select {
  
  padding: 10px 20px;
  
  border: 10px solid #ccc;
  border-radius: 20px;
  border-color: red yellow green transparent;
  
  
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  margin: 4px 0;
  border: 10px;
  border-radius: 10px;
  cursor: pointer;
 
}

input[type=submit]:hover {
  background-color: #;
  border-color: red yellow green transparent;
}

div {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 10px;
  
</style>
<body>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive personal portfolio website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<html>
   <head>
   
      <title>HTML Backgorund Color</title>
   </head>
   <body style="background-color:coral;">
   </body>
  
</html>

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"> <span>Murtaza</span> Azizi </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#service">service</a>
        <a href="#experience">experience</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span class="hi"> Hi there... </span>
        <h3> I am <span> Murtaza Azizi </span> </h3>
        <p class="info"> I am a web developer. </p>
        <p class="text"> Thank you for choosing me.  </p>
		 <p class="text"> welcome to my page.  </p>
        <a href="#about" class="btn">about me..</a>
    </div>

    <div class="image">
        <img src="images/azizi 1.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> About <span> Me </span> </h1>

<div class="row-1">

    <div class="image">
        <img src="images/azizi 3.jpg" alt="">
    </div>

    <div class="content">
        <h3> My name Is Murtaza Azizi & I am a Web Developer </h3>
        <p>  I had completed bachelor of Computer Application in Goa university  .</p>
        <div class="box-container">
            <div class="box">
			    <p> <span> Date of birth : </span> 10/05/2001 </p>
                <p> <span> age : </span> 21 </p>
                <p> <span> gender : </span> male </p>
                <p> <span> language : </span> hindi, english , persion , pashto , etc</p>
                <p> <span> work : </span> web developer </p>
            </div>
            <div class="box">
                <p> <span> freelance : </span> available </p>
                <p> <span> phone : </span> +919529157851 </p>
                <p> <span> email : </span> sohrab.habibi500@Gmail.com </p>
                <p> <span> country : </span>  From Afghanistan & living in India </p>
            </div>
        </div>
        <a href="#" class="btn">download CV</a>
        <a href="#" class="btn">hire me</a>
    </div>

</div>

<h1 class="heading"> <span> My </span> Skills </h1>

<div class="row-2">

    <div class="skills">
        <div class="progress">
            <h3> web design <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> web development <span> 80% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> UI design <span> 75% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> Graphic Design <span> 85% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
    </div>

    <div class="box-container">

        <div class="box">
            <h3> >> 2+ </h3>
            <p>years of experience</p>
        </div>
        <div class="box">
            <h3> >> 50+ </h3>
            <p>happy clients</p>
        </div>
        <div class="box">
            <h3> >> 10+ </h3>
            <p>projects completed</p>
        </div>
        <div class="box">
            <h3> >> 2+ </h3>
            <p>awards won</p>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">

<h1 class="heading"> <span> My </span> Services </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web designing...........................$70.10</h3>
            <p>Custom Website Design</p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>Graphic designing.......................$7.90</h3>
            <p>Custom Logo Design</p>
        </div>

        <div class="box">
            <i class="fas fa-mobile"></i>
            <h3>Responsive Designing....................$10.99</h3>
            <p>Custom Responsive Design </p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>UI & UX Design..........................$20.95</h3>
            <p>Web Afghanistan Interface & Desktop Application Interface</p>
        </div>

        <div class="box">
            <i class="fas fa-chart-line"></i>
            <h3>Digital Marketing.........................$30.99</h3>
            <p>Custom Digital Marketing & video Making</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email Marketing...........................$20.99</h3>
            <p>Custom Email Marketing</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- experience section starts  -->

<section class="experience" id="experience">

    <h1 class="heading"> <span> My </span> Experience </h1>

    <div class="box-container">

        <div class="box">
            <div class="content">
                <span> 2017 - 2018 </span>
                <h3>front-end development</h3>
                <p>Web Designing.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2018 - 2019 </span>
                <h3>front-end development</h3>
                <p>Web Developing.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2019 - 2020 </span>
                <h3>front-end development</h3>
                <p>UI & UX Designing.</p>
            </div>
        </div>

        
        </div>

        <div class="box">
            <div class="content">
                <span> 2020 - 2021 </span>
                <h3>front-end development</h3>
                <p>Digital Marketing & Email Marketing.</p>
            </div>
        </div>

    </div>

</section>

<!-- experience section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span> My </span> portfolio </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/imp-6.jpeg" alt="">
            <h3> project 01 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/imp-1.jpeg" alt="">
            <h3> project 02 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/imp-2.jpeg" alt="">
            <h3> project 03 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/imp-9.jpeg" alt="">
            <h3> project 04 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/imp-3.jpeg" alt="">
            <h3> project 05 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/imp-7.jpeg" alt="">
            <h3> project 06 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> Contact <span> Me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>My Email</h3>
            <p>sohrab.habibi500@Gmail.com</p>
            <p>sohrabhabibi@icloud.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>My number  & WhatsApp Number</h3>
            <p>+919529157851</p>
            <p>+93728120963</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>My Location In India</h3>
            <p>panjim goa taleigoa, india - 403002</p>
        </div>
		
		 <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>My Location in Afghanistan</h3>
            <p>Mazar -E- Sharif Balkh Afghanistan -1702</p>
        </div>

    </div>

    <div class="row">

        <form action="saveForm.php" method="GET">

            <input type="text" placeholder="name" class="box" name="name">
            <input type="email" placeholder="email" class="box" name="email">
            <input type="text" placeholder="number" class="box" name="number">
             
            <textarea  placeholder="message" id="" cols="30" rows="10" name="message"></textarea>

            <input type="submit" class="btn" value="send message">

        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pest%2C!2sin!4v1625069635379!5m2!1sen!2sinTaleigao 
https://google/maps/U425W8vSFxSTa5eT6/maps/U425W8vSFxSTa5eT6=m" allowfullscreen="" loading="lazy"></iframe>
         
    </div>


</section>

<!-- contact section ends -->

<!-- footer section  -->
<footer class="footer"> created by <span> Mr.Murtaza Azizi </span> | all rights reserved! </footer>









<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>