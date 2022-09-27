<!DOCTYPE html>
<html lang="en">

<!-- links/head here -->
<?php
  require_once('includes/links.php')
?>

<body>  

  <?php
      // // <!-- navbar here -->
      require_once('includes/navbar.php');
      
    
      // 1. db connection
        require_once('dbconnect.php');

        if(isset($_POST{'submitSubscribers'})){

            // 2. fetch from data            
            $email =$_POST['email'];
           
            // 3. SQL Query to insert data to database
            $queryData = mysqli_query($Conn, "INSERT INTO subscribers (email) 
            VALUES('$email') ");

            // 4.check if data is inserted
            if($queryData)
            {
                echo"Data submitted succesfuly!";
            }
            else{
                echo"Error";
            }



        }

  ?>
        
 <section class="container-fluid bg-warning ">
    <div class="aboutus container">                 
      <h3>About us</h3>
      <p style="padding-bottom:28px ;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore omnis voluptate cupiditate alias velit recusandae id laborum libero quas consectetur iste modi, quia distinctio debitis laudantium ad aliquid. Modi similique rerum veniam molestiae nihil expedita architecto non, necessitatibus, sequi, amet nesciunt dolorem. Cum perspiciatis consectetur nam quas accusantium quaerat saepe.</p>
    </div>

  </section>
                
  <section class="container ">
    <div class="row">
      <div class="col">
        <h3>Our Program</h3>
          
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum atque tempore ullam repellat officiis, error voluptates. Maiores, quasi eos. Ipsam doloremque recusandae, neque quisquam ad dolor. Iusto odio provident repellendus omnis ab dignissimos, facere iste ipsa reprehenderit in ad architecto eaque dolorum earum repudiandae at distinctio id vero quaerat ea ipsam mollitia delectus. Est odit praesentium nisi qui, commodi repudiandae!</p>

      </div>

      <div class="col">
         <img src="./computer.avif" class="container" alt="learning" style="padding-top: 28px;">
      </div>

    </div>

  </section>
  
  <section class="container">
    <h3>The Programs</h3>

  </section>

  <section class="container">
    <div class="row">
      <div class="col">   
        <div class="card" style="width: 18rem;">
           <div class="card-body">
              <h5 class="card-title">Skill Discovery</h5>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, minus!</p>
                <a href="#">
                <button type="button" class="btn btn-primary">View Details</button>
              </a>
           </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Upskilling Program</h5>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, minus!</p>
              <a href="#"><button type="button" class="btn btn-primary">View Details</button></a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Path finding Program</h5>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, minus!</p>
              <a href="#"><button type="button" class="btn btn-primary">View Details</button></a>
            </div>
          </div>
        </div>  
      </div>
    </div>

  </section>




      
  <div class="container">
          <p>
            Subscribe to get information, latest news about Zalego Academy
          </p>
  </div>
       
  <section class="container justify-content-center">
    <form action="index.php" method="post">
          <div class="row">
            <div class="col-lg-7">
              <div class="form-group " >
                
                <input type="email" class="form-control" name="email" id="" placeholder="Your email address">
                
              </div>
            </div>
            <div class="col-lg-5">
              <button type="submit" name="submitSubscribers" class="btn btn-success">Subscribe</button>

            </div>
          </div>  
        </form>  
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>



<footer>
  <div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text">© Zalego2022</p>
    </div>
  </div>
</footer>
 
</html>