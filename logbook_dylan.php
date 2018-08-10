<!DOCTYPE html>
<?php include "php/session_check.php";?>
<html lang="en">
		<head>
		<title>Dylan Kite's Weekly Log Book</title>
		<meta name="description" content="This is Dylan's logbook page for our elevator project" />
		<meta name="robots" content="noindex nofollow" />
		<meta http-equiv="author" content="Dylan Kite" />
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
                      <h1 class="display-4">Weekly Logbook - Dylan Kite</h1>
					</div>
       
	<body>
		
		<figure>
			<div align="center">
			<img src="images/dylan.jpg" alt="A Very Good looking photo of Dylan"
				title="A Nice Hat" />
			<figcaption><b>Dylan Kite: </b>Programming extraordinaire </figcaption>
		</figure></div>
		
		<h2>Index</h2>
			<ul>
				<li><a href="#w1">Week 1</a></li>
				<li><a href="#w2">Week 2</a></li>
				<li><a href="#w3">Week 3</a></li>
				<li><a href="#w4">Week 4</a></li>
				<li><a href="#w5">Week 5</a></li>
				<li><a href="#w6">Week 6</a></li>
				<li><a href="#w7">Week 7</a></li>
				<li><a href="#w8">Week 8</a></li>
				<li><a href="#w9">Week 9</a></li>
				<li><a href="#w10">Week 10</a></li>
				<li><a href="#w11">Week 11</a></li>
				<li><a href="#w12">Week 12</a></li>
				<li><a href="#w13">Week 13</a></li>
            </ul>
		<h2 id="w1">Week 1</h2>
		<ul>
			<li>Entry 1: 09/05/18</li>
			<p>
			- Started rough timeline with blair outlining the goals for the project using Microsoft Project <br />
			- Was invited to Github by Blair <br />
			</P>
			<li>Entry 2: 10/05/18</li>
			<p>
			- Determined roles for the project. I will be working on mainly embedded code <br />
			- Started looking into how to use the scope to decode can  with Olivia(3000 series scope) <br />
			</p>
			<li>Entry 3: 14/05/18</li>
			<p>
			- Managed to get screenshot of can working on scope ***insert image here*** <br />
			</p>
		</ul>
		<h2 id="w2">Week 2</h2>
		<ul>
			<li>Entry 1: 16/05/18</li>
			<p>
			-Determined hardware Design <br />
			Top Floor: <br />
			- 3 LEDs: Top (A0), Mid (A1), Bottom(A2) <br />
			- 1 Button: Down (B0) <br />
			Mid Floor: <br />
			- 3 LEDs: Top (A0), Mid (A1), Bottom(A2) <br />
			- 2 Button: Up(B0), Down(B1) <br />
			Bottom Floor: <br />
			- 3 LEDs: Top (A0), Mid (A1), Bottom(A2) <br />
			- 1 Button: Up (B0) <br />
			carrier: <br />
			- 3 LEDs: Top (A0), Mid (A1), Bottom(A2) <br />
			- 3 Button: Top (B0), Mid (B1), Down (B2) <br />
			</p>
		</ul>
		<h2 id="w3">Week 3</h2>
		<ul>
			<li>Entry 1: 21/05/18</li>
			<p>
			- Created Schematics <br />
			</p>
			<li>Entry 2: 24/05/18</li>
			<p>
			- Created basic style sheet for project (with BEST FONT WINGDINGS) <br />
			- Updated logbooks to be individual (per person) <br />
			- updated logbooks to have images and captaions for all group members <br />
			</p>
		</ul>
		<h2 id="w4">Week 4</h2>
		<ul>
			<li>Entry 1: 28/05/18</li>
			<p>
			- Removed wingdings on index page- replaced with comic sans <br />
			- Started creating master style guide <br />
			- Set up CAN bus on desk to start programming each node <br />
			- Installed code warrior <br />
			</p>
			<li>Entry 2: 30/05/18</li>
			<p>
			<table style ="width:10%"
				<tr>
					<td><strong>IDS</strong></th>
				</tr>
				<tr>
					<td>car: 0x200</th>
				</tr>
				<tr>
					<td>F1: 0x201</th>
				</tr>
				<tr>
					<td>F2: 0x202</th>
				</tr>
				<tr>
					<td>F3: 0x203</th>
				</tr>
			</table> <br/>
			<table style ="width:10%"
				<tr>
					<td><strong>MSG's</strong</th>
				</tr>
				<tr>
					<td>goto F1 0x05</th>
				</tr>
				<tr>
					<td>goto F2 0x06</th>
				</tr>
				<tr>
					<td>goto F3 0x07</th>
				</tr>
			</table> <br/>
			- CAN TX arg list:<br />
				<ul>
				<li> IO of msg </li>
				<li> priority </li>
				<li> msg len </li>
				<li> msg </li>
				</ul>
			- In interrupt Btn: fire msg  <br />
			- In interrupt Rx: check incoming floor, apply appropriate mask to GPIO B  <br />
			</p>
			<li>Entry 3: 31/05/18</li>
			<p>
			- Finished floor 1 - button reading program requires testing <br />
			1 = output <br />
			0 = input <br />
			- Need to fix msg ID to be 0x201, can message sends when btn is pressed <br />
			- Works using address 100 and floor ID 0x05 <br />
			- Need to get working 0x201 and msg 0x01 <br />
			</p>
		</ul>
		<h2 id="w5">Week 5</h2>
		<ul>
			<li>Entry 1: 02/06/18</li>
			<p>
			- Finished supervisor program - need to fix bug that causes crash on PI<br />
			- Floor 1: 0x201<br />
			- 0b: 0010 0000 0001<br />
			- Issue seems to be related to supervisor not HCS12<br />
			</p>
			<li>Entry 2: 04/06/18</li>
			<p>
			- Floor controller is OK, just need to clean up code for submission<br />
			- Issue is in PI A - try i) second handle for write, ii) sleep between read and write for 1 sec<br />
			- Sleep did not fix - did delay until write<br />
			- Interrupts are causing the board to run away<br />
			</p>
		</ul>
		<h2 id=w6">Week 6</h2>
		<ul>
			<li>Entry 1: 11/06/18</li>
			<p>
			- Started door open commands for elevator car<br/>
			<ul>
				<li> Logic: On car when button is pressed, door will stay open for ~5sec - elevator won't move until timer expires</li></br>
			</ul>
			- Car: when button is pressed, 0x08 is sent to the server<br />
			- Supervisor: when 0x08 is received, it will check the location of the elevator, if at a floor, start the timer<br />
			- Going to run clang format for supervisor<br />
			</p>
			<li>Entry 2: 12/06/18</li>
			<p>
			- updated video page to use youtube link instead of mp4<br />
			<li>Entry 3: 13/06/18</li>
            - created sql c++ shell for supervisor program <br />
			- Next steps: <br />
			    - design protocal we will be using for floor info <br />
                - create seperate thread to read db and report updates<br />
                - test created functions <br />
                - if time permitting create twitch plays elevator program <br />
			</p>
		</ul>
        <h2 id="w7">Week 7</h2>
        <ul>
            <li>Entry 1: 18/06/18</li>
            <p>
            - added copyright info<br />
            - designed and added team logo<br />
            </p>
            <li>Entry 2: 19/06/18</li>
            <p>
            - added meta tags <br />
            - fixed logbooks <br />
            </p>
        </ul>
        <h2 id="w8">Week 8</h2>
        <ul>
            <li>Entry 1: 24/06/18</li>
            <p>
            - Started Socket Assignment<br />
            </p>
            <li>Entry 2: 25/06/18</li>
            <p>
            - Finished socket assignment<br />
            </p>
        </ul>
        <h2 id="w9">Week 9</h2>
        <ul>
            <li>Entry 1: 04/07/18</li>
            <p>
            - Started updating C++ program to read sql database<br />
            - changes are as follow:<br />
                -read latest sql entry<br />
                - will contain floor and epoch (subject to change)<br />
                - will check against current floor and move to it if needed<br />
                - update sql database when button is pressed with floor number and epoch (subject to change)<br />
            </p>
            <li>Entry 2: 05/07/18</li>
            <p>
            - finished updating c++ program to read and write to database<br />
            - next step is to test applied changes<br />
            </p>
        </ul>
        <h2 id="w10">Week 10</h2>
        <ul>
            <li>Entry 1: 09/07/18</li>
            <p>
            - starting to test C++ SQL database read <br />
			- merged bootstrap branch (with Blair) <br />
			- main database (epoch time, current floor, requested floor - elevator network) <br />
            </p>
        </ul>
		<h2 id="w11">Week 11</h2>
        <ul>
            <li>Entry 1: 19/07/18</li>
            <p>
            - changed name to Requested Floor instead of Request Floor - floor requests work as expected but current floor doesn't update from supervisor controller <br />
			- set up logging database in C++ (logging table: epoch time nodeID msg)
			- 2 new functions: 1 that reads the latest entry and one that writes the latest log
            </p>
        </ul>
		<h2 id="w12">Week 12</h2>
        <ul>
            <li>Entry 1: 23/07/18</li>
            <p>
            - Queue - dynamic array holds epoch time of everything, delete entries starting at oldest until only n entries remain <br />
            </p>
        </ul>

		<h2 id="w13">Week 13</h2>
        <ul>
            <li>Entry 1: 30/07/18</li>
            <p>
            - Researched into python scripting for twitchplays - add-on so that the elevator can be controlled from chat<br />
			- Went skateboarding Tuesday - 5km<br/>
			- Software backend assignment - code clean-up<br/>
            </p>
        </ul>
	<a href="#top">Back to Top</a>
	</form>
	<div id="floating_flame_LR">
		<img src= "images/flame.gif" />
	</div>
	<div id="floating_flame_LL">
		<img src= "images/guy.gif" />
	</div>
	<footer>&copy; Dylan Kite</footer>
	</body>
</html>
