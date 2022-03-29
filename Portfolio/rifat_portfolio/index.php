<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rifat's Portfolio</title>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>


   

</header>


<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/rifat.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hi, I am Tanvir Ahsan Rifat</h3>
      <span data-aos="fade-up">Student and Web Learner</span>
      <p data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum nesciunt totam, veritatis placeat perferendis, ut quia alias est non quibusdam quas molestiae hic temporibus neque distinctio? Impedit commodi recusandae nihil necessitatibus nam nesciunt ducimus cumque vel. Veniam, sed corrupti quod odit optio maiores mollitia libero officiis quos quisquam earum reprehenderit, ipsam illo velit provident voluptatibus, accusantium veritatis? Excepturi voluptatum, harum ut rem dolorum consectetur ex iusto molestias dicta corrupti perferendis fugiat, numquam reprehenderit culpa. Magnam laborum fugit eveniet! Ut voluptas, ab consequuntur dignissimos ullam nemo ex nostrum minus! Laborum aspernatur corrupti beatae quibusdam vero distinctio asperiores aperiam modi error ducimus.</p>
      <a data-aos="fade-up" href="#about" class="btn">About Me</a>
   </div>

</section>


<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>Biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Tanvir Ahsan </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> Tanvir@aiub.edu </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Nikunja 2, Khilkhet, Dhaka </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +880-123456 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 24 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 0 Hihihi </h3>
      </div>


   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>Skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>65%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2022 )</span>
               <h3>Computer Science & Engineering</h3>
               <p>American International University Bangladesh</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2022 - Current )</span>
               <h3>Web Developer</h3>
               <p>Fiverr and Upwrok</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>Graphic Designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>Front-end developer/Learner</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

      </div>

   </div>

</section>


<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>Services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Web Development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>Graphic Design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>



      <div class="box" data-aos="zoom-in">
         <i class="fas fa-adn"></i>
         <h3>Seo Marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>Digital Marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>Wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bomb"></i>
         <h3>Fighting</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>


<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>Portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/jj.jpg" alt="">
         <h3>Web Development</h3>
         <span>( 2022 - Current )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/cc.jpg" alt="">
         <h3>Web Development</h3>
         <span>( 2022 - Current )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/wd.jpg" alt="">
         <h3>Web Design</h3>
         <span>( 2022 - Current )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/dm.jpg" alt="">
         <h3>Digital Marketing</h3>
         <span>( 2022 - Current )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>Web Development</h3>
         <span>( 2022 - Current )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/c.png" alt="">
         <h3>Software Development</h3>
         <span>( 2022 - Current )</span>
      </div>

   </div>

</section>


<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>Contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>Phone</h3>
         <p>+880-123456</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>Email</h3>
         <p>tanvir@aiub.edu</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Address</h3>
         <p>Nikunja 2,Khilkhet,Dhaka</p>
      </div>

   </div>

</section>


<div class="credit"> &copy; Copyright @ <?php echo date('Y'); ?> by <span>Md. Tanvir Ahsan Rifat</span> </div>







<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>