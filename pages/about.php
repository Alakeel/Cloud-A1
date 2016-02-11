<?php include('../Configs/session.php'); // Starting Session ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>About &middot; InstaCloud</title>
    
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
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li class="active"><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

  
	  <div id="section">
		<h1>About InstaCloud</h1> 
		<hr/>
		<p>
			     InstaClod allows you to view and download your favourite photo directly from Instagram just by one click. Using the search box allow you to enter any hashtag you want to get the photos or video you want.
           The web is still in beta and will be improved in the future.
		</p>
		</div>


<!-- footer of the page -->
<?php include('footer.php') ?>
