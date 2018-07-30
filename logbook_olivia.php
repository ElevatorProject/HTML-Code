<!DOCTYPE html>
<?php include "php/session_check.php";?>
<html lang="en">
	<head>
		<title>Olivia Godwin's Weekly Log Book</title>
		<meta name="description" content="This is Olivia's logbook page for our elevator project" />
		<meta name="robots" content="noindex nofollow" />
		<meta http-equiv="author" content="Olivia Godwin" />
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
                      <h1 class="display-4">Weekly Logbook - Olivia Godwin</h1>
					</div>
       
	
	
	<body>
		<figure>
		<div align="center">
			<img src="images/olivia.jpg" alt="Olivia Godwin"
				 title="A True Connoisseur Of IPA's (Indian Pale Apple-juice)" />
			<figcaption><b>Olivia Godwin: </b>Loves drinking apple juice, shown above </figcaption>
		</figure></div>

		
		
		<h2>Week 1</h2>
		<ul>
			<li>Entry 1: May 10, 2018 </li>
			<p>- Joined group project Github<br />
			- Watched Github tutorials <br />
			- Group roles discussion <br />
			- Dylan & Olivia started looking into how to use the 3000 series scopes to decode the CAN bus<br />
			<ul TYPE="square">
			<li> Olivia: interested in learning MySQL, interested in front-end development
			<li> Dylan: doing majority of embedded programming, development work to be divided up
			<li> Blair: MySQL, interested in web development
			</ul>
			</p>
			<li>Entry 2: May 11, 2018 </li>
			<p>- Started working on Data Comm & Networks Homework 1: CAN bus design<br />
			- Discussed CAN bus design homework with Dylan & Blair, reviewed the calculations <br />
			- Worked through CAN bus calculations from class slides <br />
			</p>
		</ul>

		<h2>Week 2</h2>
		<ul>
			<li>Entry 3: May 16, 2018 </li>
			<p>- CAN bus design homework - consulted with Prof. Mike, and re-worked the CAN bus calculations<br />
			- Reviewed html basics tutorials online - <a href ="https://www.w3schools.com/html/"> HTML reference here </a> <br />
			</p>
			<li>Entry 4: May 17, 2018</li>
			<p>- Created About html page<br />
			- Created Project Plan Breakdown page, Added GIF and images<br />
			- Started playing around with CSS style - fonts, background colours, borders<br />
			</p>
		</ul>

		<h2>Week 3</h2>
		<ul>
			<li>Entry 5: May 24, 2018 </li>
			<p>- Submitted CAN bus design homework - after review from Dylan and Blair<br />
			- Created Documents html page, added image<br />
			- Created Videos html page<br />
			</p>
			<li>Entry 6: May 25, 2018</li>
			<p>- Created Project Details page & linked pages (Q14 of Software Engineering A1)<br />
			- Reviewed CSS style & stylesheet tutorials (from class slides)<br />
			- Created Project Details stylesheet<br />
			- Created & Edited 'Olivia Logbook page' <br />
			</p>
		</ul>

		<h2>Week 4</h2>
		<ul>
			<li>Entry 7: May 28, 2018 </li>
			<p>- Edited Project Details page & linked pages to completely answer Q14<br />
			- Edited main style sheet, 'style.css' to format Logbook images<br />
			- Started developing the Request Access page<br />
			</p>
			<li>Entry 8: June 1, 2018</li>
			<p>- Developed the login page and the Request Access page<br />
			- Completed the Data Comm A2 (LAN) with Blair and Dylan<br />
			- Linked the Request Access Page to the Login Page<br />
			- Added Login Page to index page header<br />
			</p>
		</ul>

		<h2>Week 5</h2>
		<ul>
			<li>Entry 9: Jun 5, 2018 </li>
			<p>- Developed the Elevator Controller page<br />
			- Watched Javascript tutorials, and started creating practice test code<br />
			</p>
			<li>Entry 10: Jun 8, 2018</li>
			<p>- Worked with Blair to start creating php pages for Login, Request Access, and Elevator Controller<br />
			- Reviewed the Javascript class notes<br />
			</p>
		</ul>

		<h2>Week 6</h2>
		<ul>
			<li>Entry 11: June 12, 2018 </li>
			<p>- watch Javascript tutorials, review S.Eng. notes - <a href ="https://www.w3schools.com/js/js_input_examples.asp"> Javascript reference here </a><br />
			</p>
			<li>Entry 12: June 15, 2018</li>
			<p>- more Javascript tutorials - login, form creation <br />
			</p>
		</ul>

		<h2>Week 7</h2>
		<ul>
			<li>Entry 13: June 19, 2018 </li>
			<p>- Javascript tutorials - login, logout, form validation, sessions<br />
			- Backend PHP - watch tutorials, review class notes<br />
			</p>
			<li>Entry 14: June 22, 2018</li>
			<p>- Backend PHP - <a href ="https://www.tutorialspoint.com/php/index.htm"> PHP reference here </a><br />
			- Worked on front-end dev. assignment - <br />
			</p>
		</ul>

		<h2>Week 8</h2>
		<ul>
			<li>Entry 15: June 26, 2018 </li>
			<p>- MySQL tutorials <a href ="https://www.tutorialspoint.com/mysql/index.htm"> MySQL reference here </a><br />
			- Worked on front-end dev. assignment<br />
			</p>
			<li>Entry 16: June 28, 2018</li>
			<p>- PHP and MySQL class notes review, more tutorial examples<br />
			- Worked on front-end dev. assignment - field validation, incorporating javascript into the login page<br />
			</p>
		</ul>

		<h2>Week 9</h2>
		<ul>
			<li>Entry 17: July 3, 2018 </li>
			<p>- PHP and MySQL, experimenting with basic tables and inputting data<br />
			- Ajax basics, getting started - <a href ="https://www.w3schools.com/xml/ajax_intro.asp"> AJAX intro. here </a><br />
			</p>
			<li>Entry 18: July 6, 2018</li>
			<p>- MySQL - experimenting with inputting data and tables<br />
			- Experimenting with Ajax - <a href ="https://www.tutorialspoint.com/ajax/index.htm"> AJAX full reference here </a><br />
			</p>
		</ul>
		
		<h2>Week 10</h2>
		<ul>
			<li>Entry 19: July 11, 2018 </li>
			<p>- Testplan notes - Phase 2 technical <br />
			</p>
		</ul>
	
		<h2>Week 11</h2>
		<ul>
			<li>Entry 20: July 17, 2018 </li>
			<p>- Bootstrap: Documents, Videos pages <br />
			- Testplan write up - Phase 2 technical</a><br />
			</p>
			<li>Entry 21: July 19, 2018</li>
			<p>- cleaning up Javascript in html code - move to .js files<br />
			- Testplan write up - Phase 2 technical</a><br />
			</p>
		</ul>
		
		<h2>Week 12</h2>
		<ul>
			<li>Entry 22: July 23, 2018 </li>
			<p>- Updated group logbooks - convert to Bootstrap<br />
			- Finishing touches to testplan - preparation for end of Phase 2<br />
			</p>
		</ul>
		
		<h2>Week 13</h2>
		<ul>
			<li>Entry 22: July 30, 2018 </li>
			<p>- Updated group logbooks<br />
			- Software backend assignment - code clean-up<br/>
			</p>
		</ul>
		
		- Software backend assignment - code clean-up<br/>
	
	<a href="#top">Back to Top</a>
	</body>
	 <div align="center">
        <footer>&copy; Olivia Godwin</footer>
     </div>
</html>

