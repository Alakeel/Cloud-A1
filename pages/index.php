<?php include('../Configs/session.php'); // Starting Session ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home &middot; InstaCloud</title>
	
	<?php include('../Configs/links.php') ?>
  </head>
  
  <body>

    <div class="container">
	<?php include '../Configs/check_login.php';?>
      <div class="masthead">
        <h3 class="muted">Cloud Computing Assignment (1)</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>


           <?php if(!isset($_SESSION['login_user'])) { ?>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>InstaCloud</h1>
        <p class="lead">Welcome to the InstaCloud where you can search and download your favourite photos from instagram for free just by one click !</p>
        <p class="lead">Sign Up to get started! </p>
        <a class="btn btn-large btn-success" href="signup.php">Sign Up</a>
      </div>

	  <!-- good line to separate staffs -->
  
             <?php } else {?>
      <div class="jumbotron">
<!--         <h2>Welcome <?php echo $_SESSION['login_user']?>-->
        <h4>Easy Download and Hashtag Search For Instagram</h2>
        <h4 class="lead">Enjoy Searching!</h4>
        <div class="mid">
      			<?php include('search.php'); ?>
      	</div>
      </div>
             <?php } ?>
             
<!-- footer of the page -->
<?php include('footer.php') ?>