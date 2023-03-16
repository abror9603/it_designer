<?php
           
           if(isset($_POST['button'])){
               $db = new mysqli('localhost', 'root', 'admin96' , 'it_designer') or die('error');

               $db->query("
                   SET NAMES utf8
               ");

               $firstName = $_POST['firstname'];
               $lastName = $_POST['lastname'];
               $email = $_POST['email'];
               $subject = $_POST['subject'];
               $message = $_POST['message'];
                   
               

               $db->query("
                   INSERT INTO web_designer(firstname, lastname, email, subject, message) VALUES('$firstName', '$lastName', '$email', '$subject', '$message')
               ");

               

           }                                
           

       
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Designer</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

     <!-- Bootstrap core CSS -->
     <link href="<?= $config['base']['url']?>vendor/bootstrap/css/bootstrap.min.css?v=<?php echo time()?>" rel="stylesheet">

       <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= $config['base']['url']?>assets/css/fontawesome.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="<?= $config['base']['url']?>assets/css/templatemo-572-designer.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="<?= $config['base']['url']?>assets/css/owl.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="<?= $config['base']['url']?>assets/css/animate.css?v=<?php echo time()?>">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css?v=<?php echo time()?>"/>

    
</head>
<body>
    
    <div class="loader">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
        <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s" repeatCount="indefinite" />
            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
        </rect>
        <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
        </rect>
        <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
        </rect>
        </svg>
    </div>

  <header id="#top">

      <nav class="main-navigation navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="index.php"><img src="<?=$config['base']['url']?>assets/images/white-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Homepage</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pages=about">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pages=explore">Explore Work</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pages=trending">Trending</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pages=contact">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>

  </header>
    
  <?php
  
    include $config['base']['path'] . 'webs/moduls/' . $pages . '.php';
  
  ?>


  <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="about-widget">
                      <img src="<?= $config['base']['url']?>assets/images/footer-logo.png" alt="designer template by TemplateMo">
                      <p>Designer is free Bootstrap v5.1.3 CSS template. Everyone can get the best HTML CSS templates from TemplateMo website.</p>
                  </div>
              </div>
              <div class="col-lg-2 offset-lg-2">
                  <div class="location-widget">
                      <h4>Our Location</h4>
                      <p>Sunny Isles Beach, <br><br>Florida 33160, <br>United States</p>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="customer-care">
                      <h4>Customer Care</h4>
                      <ul class="info">
                          <li><a href="#">010-020-0340</a></li>
                          <li><a href="#">090-080-0760</a></li>
                          <li><a href="#">info@company.com</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="follow-us">
                      <h4>Follow Us</h4>
                      <ul class="social-links">
                          <li>
                              <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                  </svg>
                                  Facebook
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                  </svg>
                                  Twitter
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                  </svg>
                                  Linkedin
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-6 offset-lg-6">
                  <h4>Subscribe To Our Newsletter</h4>
                  <form id="subscribe" action="" method="get">
                      <div class="row">
                          <div class="col-lg-12">
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Type your email..." required=""> 
                              <button type="submit" id="form-submit" class="text-button ">
                                  Submit 
                                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                  </svg>
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-12">
                  <div class="sub-footer">
                      <div class="row">
                          <div class="col-lg-6">
                              <p>Copyright © 2022 Designer Co., Ltd. All Rights Reserved. 
                              
                              <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                          </div>
                          <div class="col-lg-6">
                              <a href="#top" class="scroll-to-top">
                                  Go to Top
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <script src="<?= $config['base']['url']?>vendor/jquery/jquery.min.js?v=<?php echo time()?>"></script>
  <script src="<?= $config['base']['url']?>vendor/bootstrap/js/bootstrap.min.js?v=<?php echo time()?>"></script>

  <script src="<?= $config['base']['url']?>assets/js/isotope.min.js?v=<?php echo time()?>"></script>
  <script src="<?= $config['base']['url']?>assets/js/owl-carousel.js?v=<?php echo time()?>"></script>

  <script src="<?= $config['base']['url']?>assets/js/tabs.js?v=<?php echo time()?>"></script>
  <script src="<?= $config['base']['url']?>assets/js/popup.js?v=<?php echo time()?>"></script>
  <script src="<?= $config['base']['url']?>assets/js/custom.js?v=<?php echo time()?>"></script>
  <script src="<?= $config['base']['url']?>assets/js/index.js?v=<?php echo time()?>"></script>
</body>
</html>