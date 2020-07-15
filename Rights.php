<?php include './php/queries.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Women's rights is what woman want. Every other 3rd woman is struggling with something which they don't discuss with someone. They can put there rights by knowing it and this website help woman have knowledge of their right and fight for there rights.">
  <meta name="keywords" content="woman rights, women rights, rights, laws, law">
  <meta name="author" content="Sunil Chaudhary">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Women's Rights</title>
  <link rel="shortcut icon" href="./imgs/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css"/>
  <link rel="stylesheet" href="./css/custom/rights.min.css">
  <link rel="stylesheet" href="./loader/loader.min.css">
</head>
<body onload="myFunction()">

  <div id="loading">
    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  </div>

  <nav class="navbar navbar-expand-md wr-nav navbar-dark fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="#">WOMEN'S RIGHTS</a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" aria-label="wr-nav-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Rights</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.html#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.html#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="hero" class="container-fluid wr-sec1">
    <div class="col-md-6 wr-sec1-col1">
        <div class="container-fluid text-center wr-sec1-col1-con">
            <p class="wr-top-attr">Sunil Chaudhary</p>
            <h1 class="wr-top-h1">LET EVERY WOMAN GET HER JUSTICE & RIGHTS.</h1>
        </div>
    </div>
  </div>

  <div class="wr-grad-bg">
    
  <div class="container-fluid wrcards-collection">
    <div class="card-columns">
      <!-- 1 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>

      <!-- The Modal -->
      <div class="modal modal-fade wr-modal" id="wrmodal1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title"><img src="./imgs/icons/male child.svg" style="width: 100px;" alt="icon"><?php echo $h1 ?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <?php echo $h1b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 3 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 4 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 5 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 6 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 7 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 8 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 9 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 10 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 11 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 12 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 13 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 14 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>
      <!-- 15 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top img-fluid" src="./imgs/icons/male child.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>

    </div>
  </div>

  <div class="container-fluid wr-footer">
    <div class="wr-foot-col1 d-flex flex-wrap justify-content-center">
      <a href="./index.html" class="m-4">Home</a>
      <a href="./index.html#about" class="m-4">About us</a>
      <h4 class="m-4">WOMEN'S RIGHTS</h4>
      <a href="./index.html#contact" class="m-4">Contact us</a>
      <a href="#" class="m-4">Rights</a>
    </div>
    <hr class="mx-auto">
    <div class="wr-foot-col2 d-flex flex-wrap justify-content-center">
      <a href="#" class="m-4"><img src="./imgs/linkedin.svg" alt="whatsapp" class="img-fluid" style="width: 40px;"></a>
      <a href="#" class="m-4"><img src="./imgs/whatsapp.svg" alt="instagram" class="img-fluid" style="width: 40px;"></a>
      <a href="#" class="m-4"><img src="./imgs/youtube.svg" alt="linkedin" class="img-fluid" style="width: 40px;"></a>
    </div>
    <div class="wr-foot-col3 d-flex flex-wrap justify-content-center">
      <p>&#169; 2020 <a href="./privacy.html">Privacy Policy</a></p>
    </div>
  </div>

  </div>
  
  <script src="./js/custom/myjs.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- js bs -->
  <script src="./js/bootstrap.min.js"></script>
</body>
</html>