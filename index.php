<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="./assets/css/animate.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <section class="head my-0 p-5">
    <div class="container mt-5">
      <div class="col-md-12">
        <img src="./assets/img/Group 25.png" alt="">
      </div>
    </div>
    <div class="container my-5 mon">
      <div class="row">
        <div class="col-md-7 my-auto align-self-center wow fadeInDown">
          <div class="mb-5">
            <h1>Share battery charge with other devices easily.</h1>
          </div>
          <div class="my-5">
            <h3>Be the first to use this app when it arrives</h3>
            <div class="input-wrap">
              <form class="form-group mt-4 mx-auto" method="POST" action="submit.php">
                <input type="email" class=" " name="email" id="email" placeholder="Enter email here"
                  placeholder="Email address">
                <button class="btn btn-danger" name="submit" type="submit" value="Subscribe">Submit</button>
              </form>
              <?php
       if(isset($_SESSION["error"])){
           $error = $_SESSION["error"];
           echo "<p class='text-center mt-1 bg-danger p-3 text-white col-md-8 mx-auto'>$error</p>";
       }
       if(isset($_SESSION["success"])){
           $success = $_SESSION["success"];
           echo "<p class='text-center mt-1 bg-success p-3 text-white col-md-8 mx-auto'>$success</p>";
       }
     ?>
            </div>
          </div>
          <div class="mb-5 com">
            <h5>Coming soon on</h5>
            <img src="./assets/img/Group 35(1).png.png" alt="">
            <img src="./assets/img/Group 36.png" alt="">
            <i class="fa fa-amazon"></i>
          </div>
          <img src="./assets/img/Group 25.png" alt="" class="mt-5">
        </div>
        <div class="col-md-5 wow fadeInDown">
          <div class="inner">

          </div>
        </div>
      </div>
    </div>
  </section>





  <section class="container sec">
    <div class="row">
      <div class="col-md-5 wow fadeInDown">
        <div class="en">

        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInDown">
        <h1>5 Easy Steps to follow. </h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur.</p>
        <ul>
          <li>Refresing to get such a personal touch.</li>
          <li>Alluring to get such a personal touch.</li>
          <li>Amazing to get such a personal touch.</li>
          <li>Mind to get such a personal touch.</li>
          <li>Incredible to get such a personal touch.</li>
        </ul>
      </div>
    </div>
  </section>









  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https ://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835(1).pngLr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="./assets/js/wow.js"></script>
  <script src="./assets/js/script.js"></script>
  <script>
    new WOW().init();
  </script>

</body>

</html>

<?php
    if(isset($_SESSION["error"])){
      unset($_SESSION["error"]);
      
    }

    if(isset($_SESSION["success"])){
      unset($_SESSION["success"]);
    }
?>