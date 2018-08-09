<!DOCTYPE html>
<?php include "php/session_check.php";?>
<html lang="en">
	<head>
		<title>Blair Sharpe's Weekly Log Book</title>
		<meta name="description" content="This is Blair's logbook page for our elevator project" />
		<meta name="robots" content="noindex nofollow" />
		<meta http-equiv="author" content="Blair Sharpe" />
		<meta http-equiv= "pragma" content="no-cache" />

		<link href="css/style_logbook.css" type="text/css" rel="stylesheet" />
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
                            <li><a href="nodeTable.php">Node Table</a></li>

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
                    <div class="container" align="center">
                      <h1 class="display-4">Weekly Logbook - Blair Sharpe</h1>
					</div>
	
	<body>
		 
		<figure>
			<div align="center">
            <img src="images/blair.jpg" alt="Blair Sharpe"
                 title="Socks and FLops are a key to a happy life" />
            <figcaption><b>Blair Sharpe: </b> A man with a sense of fashion like no other</figcaption>
        </figure></div>

		<h2>Week 1</h2>
		<ul>
			<li>Complete Github Tutorials</li>
			<li>Look into different tools for bulding website i.e Bootstrap and React</li>
		</ul>
		
		<h2>Week 2</h2>
		<ul>
			<li>Setup Github Repos</li>
		</ul>
		
		<h2>Week 3</h2>
		<ul>
			<li>Created PHP login page</li>
			<li>Looked into ways to connect the login.html page to the PHP page</li>
            <li>Created navigation bar, added to index webpage</li>
			<li>Add Google Maps link to about page</li>
			<li>Worked on software engineering Assignment 1 (Front End)</li>
		</ul>
		
		<h2>Week 4</h2>
		<ul>
			<li>Researched MySQL, watched setup tutorials</li>
			<li>Setup the basics of an SQL system</li>
			<li>Updated some of the html pages, changed formatting</li>
			<li>Helped debug CAN setup with Dylan</li>
		</ul>
		
		<h2>Week 5</h2>
		<ul>
			<li>Worked with Dylan to debug CAN setup - figure out why nothing happens after first button press </li>
			<li>Setup MySQL database - watched tutorials for how to link php with MySQL  </li>
			<li>Worked with Olivia to create PHP code for Login, Request Access, and Elevator Control page </li>
			<li>Watched tutorials on javascript, reviewed java classnotes </li>
		</ul>
		
		<h2>Week 6</h2>
		<ul>
			<li>Created Navbar with Bootstrap</li>
			<li>Bootstrap tutorials, page structure and features</li>
		</ul>
		
		<h2>Week 7</h2>
		<ul>
			<li>Created authorization page - and experimented with creation of users, authorized session</li>
			<li>MySQL tutorials and table testing</li>
		</ul>
		
		<h2>Week 8</h2>
		<ul>
			<li>Setup MySQL database - experimented with test users </li>
			<li>Created test cases inserting data, creating tables</li>
		</ul>
		
		<h2>Week 9</h2>
		<ul>
			<li>Created controller user interface page with bootstrap - where a user can indicate what floor, and submit</li>
		</ul>
		
		<h2>Week 10</h2>
		<ul>
			<li>AJAX - watched basic tutorials, classnotes, practice examples</li>
			<li>AJAX - basic setup for floor requesting</li>
		</ul>
		
		<h2>Week 11</h2>
		<ul>
			<li>AJAX - created progress bar and submit button</li>
		</ul>
		
		<h2>Week 12</h2>
		<ul>
			<li>Created logout option/button</li>
			<li>Updated controller form - login with username</li>
		</ul>
		
		<h2>Week 13</h2>
		<ul>
			<li>Biology self-study: Fishing research assignment - Grand River fly fishing</li>
			<li>Software backend assignment - code clean-up</li>
		</ul>
		
	<a href="#top">Back to Top</a>
	<footer>&copy; Blair Sharpe</footer>
	</body>
</html>
