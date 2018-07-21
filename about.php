<!DOCTYPE html>
<?php include "php/session_check.php";?>
<html lang="en">
    <head>
        <title>Project VI - About</title>
        <meta name="description" content="This is the About page for our elevator project" />
        <meta name="robots" content="noindex nofollow" />
        <meta http-equiv= "pragma" content="no-cache" />
        <!-- Latest compiled and minified CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="about.php">about</a></li>
                    <li><a href="documents.php">documents</a></li>
                    <li><a href="videos.php">videos</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">logbooks<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logbook_blair.php">Blair</a></li>
                            <li><a href="logbook_olivia.php">Olivia</a></li>
                            <li><a href="logbook_dylan.php">Dylan</a></li>
                        </ul>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">database<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="nodeTable.php">node Table</a></li>

                            <li><a href="usersTable.php">Users Table</a></li>
                            <li><a href="floorTable.php">Floor Table</a></li>

                        </ul>

                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="request_access.html">Sign Up</a></li>
                    <li><a href="https://github.com/ElevatorProject">Github</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
                    <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-4">About Us</h1>
                      <p class="lead"> Welcome to the <i>About</i> page for Project VI.
        The purpose of this project is to build and control an elevator, using a CAN bus communications environment,
        coupled with networked systems to create a means of tracking the elevator's operational and diagnostics data. 
        Additionally, the elevator car's position and status is viewable to computers over the internet.
                      <hr class="my-4">
                      <p>View the project details page!</p>
                      <p class="lead">
                        <a class="btn btn-primary btn-lg" href="project_details.php" role="button">Details</a>
                      </p>
                    </div>

                    </div>
        <h2 align="center" >Our Group Members</h2>
        <!-- TODO: add formatting to style sheet -->
        <br>
        <br>
        <div align="center">
        <img src="images/group_photo.jpg" width="40%" height="30%"/>

<br>
<br>
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Blair Sharpe</h3>
      <p class="card-text">
        World class water-skier and off-road dirt bike ethusiast. Master fisherman - holds the world record for wrestling the largest fish.
</p>
    </div>
  </div>
<br>
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Dylan Kite</h3>
      <p class="card-text">
Bike expert - 2020 Summer Olympics hopeful. Master drone inventor. 
</p>
    </div>
  </div>
<br>
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Olivia Godwin</h3>
      <p class="card-text">
Former snowboarding bunnyhill champion. Likes knitting and spending time with cats during her free time. 
</p>
    </div>
  </div>
</div>
        </div>
<br>
<br>
<br>
<br>
        <div align="center">
        <footer>&copy; Dylan Kite, Olivia Godwin, Blair Sharpe</footer>
        </div>
    </body>
</html>
