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
    <a class="navbar-brand" href="index.html">WOMEN'S RIGHTS</a>
  
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
    <div class="card-columns mx-auto">
      <!-- 1 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/missing.svg" alt="card1-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h1 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal1">Read me</button>
        </div>
      </div>

      <!-- The Modal -->
      <div class="modal modal-fade wr-modal" id="wrmodal1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/missing.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h1 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h1b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Dowery Death.svg" alt="card2-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h2 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal2">Read me</button>
        </div>
      </div>

      <!-- The Modal2 -->
      <div class="modal modal-fade wr-modal" id="wrmodal2">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Dowery Death.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h2 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h2b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 3 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Domestic_violence.svg" alt="card3-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h3 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal3">Read me</button>
        </div>
      </div>

      <!-- The Modal3 -->
      <div class="modal modal-fade wr-modal" id="wrmodal3">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Domestic_violence.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h3 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h3b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 4 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Sati.svg" alt="card4-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h4 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal4">Read me</button>
        </div>
      </div>

      <!-- The Modal4 -->
      <div class="modal modal-fade wr-modal" id="wrmodal4">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Sati.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h4 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h4b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Child Maraige.svg" alt="card5-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h5 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal5">Read me</button>
        </div>
      </div>

      <!-- The Modal5 -->
      <div class="modal modal-fade wr-modal" id="wrmodal5">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Child Maraige.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h5 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h5b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 6 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/male child.svg" alt="card6-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h6 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal6">Read me</button>
        </div>
      </div>

      <!-- The Modal6 -->
      <div class="modal modal-fade wr-modal" id="wrmodal6">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/male child.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h6 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h6b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 7 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Infanticide.svg" alt="card7-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h7 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal7">Read me</button>
        </div>
      </div>

      <!-- The Modal7 -->
      <div class="modal modal-fade wr-modal" id="wrmodal7">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Infanticide.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h7 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h7b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 8 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Education.svg" alt="card8-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h8 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal8">Read me</button>
        </div>
      </div>

      <!-- The Modal8 -->
      <div class="modal modal-fade wr-modal" id="wrmodal8">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Education.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h8 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h8b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 9 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Exclusion.svg" alt="card9-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h9 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal9">Read me</button>
        </div>
      </div>

      <!-- The Modal9 -->
      <div class="modal modal-fade wr-modal" id="wrmodal9">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Exclusion.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h9 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h9b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 10 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Harrasment at work.svg" alt="card10-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h10 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal10">Read me</button>
        </div>
      </div>

      <!-- The Modal10 -->
      <div class="modal modal-fade wr-modal" id="wrmodal10">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Harrasment at work.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h10 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h10b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 11 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Rape.svg" alt="card11-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h11 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal11">Read me</button>
        </div>
      </div>

      <!-- The Modal11 -->
      <div class="modal modal-fade wr-modal" id="wrmodal11">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Rape.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h11 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h11b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 12 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/society.svg" alt="card12-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h12 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal12">Read me</button>
        </div>
      </div>

      <!-- The Modal12 -->
      <div class="modal modal-fade wr-modal" id="wrmodal12">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/society.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h12 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h12b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 13 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/woman empowerment.svg" alt="card13-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h13 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal13">Read me</button>
        </div>
      </div>

      <!-- The Modal13 -->
      <div class="modal modal-fade wr-modal" id="wrmodal13">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/woman empowerment.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h13 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h13b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 14 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/Fundamental Rights.svg" alt="card14-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h14 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal14">Read me</button>
        </div>
      </div>

      <!-- The Modal14 -->
      <div class="modal modal-fade wr-modal" id="wrmodal14">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/Fundamental Rights.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h14 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h14b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- 15 -->
      <div class="wr-card card text-center text-body">
        <img class="card-img-top mx-auto img-fluid" src="./imgs/icons/work.svg" alt="card15-image">
        <hr class="mx-auto">
        <div class="card-body">
          <h4 class="card-title"><?php echo $h15 ?></h4>
          <button type="button" class="btn wr-btn" data-toggle="modal" data-target="#wrmodal15">Read me</button>
        </div>
      </div>

      <!-- The Modal15 -->
      <div class="modal modal-fade wr-modal" id="wrmodal15">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-row justify-content-between">
              <img src="./imgs/icons/work.svg" alt="icon" class="align-self-center">
              <h4 class="modal-title align-self-center text-center flex-grow-1">
                <?php echo $h15 ?>
              </h4>
              <button type="button" class="close" data-dismiss="modal">
                <img src="./imgs/rights/close.svg" alt="close_icon" style="margin-right: 0;">
              </button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body lead">
              <?php echo $h15b ?>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="addthis_inline_share_toolbox share"></div>
            </div>
            
          </div>
        </div>
      </div>



    </div>
  </div>

  <div class="container-fluid wr-helpline">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 text-center wr-col1-hl">
        <img src="./imgs/rights/Admin-bro.svg" alt="helpline image" class="img-fluid">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 wr-col2-hl align-self-center">
        <div class="container text-body">
          <h2>Helpline Numbers (India)</h2>
          <p>Below are some of the helpline number which a women should always have with her incase of emegency. Go ahead and have a note of the following number in your mobile contact and share it with your other friends and family members.<br><br><strong>Note:</strong> These numbers are for people of India and have taken from internet incase any of the numbers are not working or wrong please <a href="./index.html#contact">Contact us</a> so we could update it.</p>
          <ul class="wr-help-tel">
            <li>Women Helpline: 1091</li>
            <li>Women Helpline(Domestic Abuse): 181</li>
            <li>Police: 100</li>
            <li>Fire: 101</li>
            <li>Ambulance: 102</li>
          </ul>  
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
      <a href="https://www.linkedin.com/in/sunil-c-b2a815136/" target="_blank" class="m-4">
        <img src="./imgs/linkedin.svg" alt="linkedin" class="img-fluid" style="width: 40px;">
      </a>
      <a href="https://instagram.com/_sunil_ig_" target="_blank" class="m-4">
        <img src="./imgs/instagram.svg" alt="instagram" class="img-fluid" style="width: 40px;">
      </a>
      <a href="https://wa.link/tzre2c" target="_blank" class="m-4">
        <img src="./imgs/whatsapp.svg" alt="whatsapp" class="img-fluid" style="width: 40px;">
      </a>
      <a href="https://www.youtube.com/channel/UCmCGbzoguXQH3mVRVA6cSDA" target="_blank" class="m-4">
        <img src="./imgs/youtube.svg" alt="youtube" class="img-fluid" style="width: 40px;">
      </a>
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
  <!-- Share button script -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a0b23f3c3111fc7"></script>
</body>
</html>