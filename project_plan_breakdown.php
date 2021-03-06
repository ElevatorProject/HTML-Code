<!DOCTYPE html>
<?php include "php/session_check.php";?>
<html lang="en">
	<head>
		<title>Project Plan Breakdown - By Week</title>
		<meta name="description" content="This is the breakdown page for our elevator project" />
		<meta name="robots" content="noindex nofollow" />
		<meta http-equiv="author" content="Dylan Kite" />
		<meta http-equiv= "pragma" content="no-cache" />

		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<style>
		body {background-color: gainsboro;}
		h1 {color: blue;}
		ol{color: darkgreen;}
		table, th, td {border: 1px solid black;}
		</style>
	</head>

	<body>
		<div class="navbar">
			<a href="login.html">Log In</a></li>
			<a href="index.html">Home</a></li>
			<a href="elev_controller.html">Controller</a>
            <a href="about.html">About</a>
            <a href="project_plan_breakdown.html">Project Plan</a>
            <a href="videos.html">Videos</a></li>
			<a href="documents.html">Documents</a></li>
		<div class="dropdown">
			<button class="dropbtn">Log Books
				<i class="fa fa-caret-down"></i>
			</button>
		<div class="dropdown-content">
            <a href="logbook_dylan.html">Weekly Log Book Dylan Kite</a>
            <a href="logbook_olivia.html">Weekly Log Book Olivia Godwin</a>
            <a href="logbook_blair.html">Weekly Log Book Blair Sharpe</a>
        </div>
		</div>
        </div>
		
		<h1>Project Plan Breakdown - By Week</h1>
		<ol>
			<li>Design CAN messaging protocol</li>
			<li>Plan CAN node configuration</li>
			<li>Develop a fully functioning CAN network</li>
			<li>Complete test plan and compile results</li>
			<li>Develop user interface (website) for remote control</li>
			<li>Develop user interface (website) for remote control</li>
			<li>Develop user interface (website) for remote control</li>
			<li>Develop complete internet based remote access system</li>
			<li>Complete internet based remote access system</li>
			<li>Develop accessible (read/write) data repository</li>
			<li>Complete accessible (read/write) data repository</li>
			<li>Investigate and develop connectivity between IDN and internet</li>
			<li>Complete fully functioning CAN system</li>
			<li>Oral presentation, Final Report, and Video Demonstration</li>
		</ol> <br/>
		
		<h2>Project Gantt Chart</h2>
		<p><strong>Gantt Chart Legend</strong></p>
		<table>
			<tr>
				<th bgcolor="silver">Colour</th>
				<th bgcolor="silver">Status</th>
			</tr>
			<tr>
				<td bgcolor="green"></td>
				<td>Completed</td>
			</tr>
			<tr>
				<td bgcolor="yellow"></td>
				<td>In Progress</td>
			</tr>
			<tr>
				<td bgcolor="red"></td>
				<td>Incomplete</td>
			</tr>
		</table> <br/>
		
		<table>
			<tr>
				<th bgcolor="silver">Task</th>
				<th bgcolor="silver">Status</th>
				<th bgcolor="silver">Week 1</th>
				<th bgcolor="silver">Week 2</th>
				<th bgcolor="silver">Week 3</th>
				<th bgcolor="silver">Week 4</th>
				<th bgcolor="silver">Week 5</th>
				<th bgcolor="silver">Week 6</th>
				<th bgcolor="silver">Week 7</th>
				<th bgcolor="silver">Week 8</th>
				<th bgcolor="silver">Week 9</th>
				<th bgcolor="silver">Week 10</th>
				<th bgcolor="silver">Week 11</th>
				<th bgcolor="silver">Week 12</th>
				<th bgcolor="silver">Week 13</th>
				<th bgcolor="silver">Week 14</th>
			</tr>
<!--Phase 1 (4 Weeks) -->
			<tr>
				<td>Design CAN messaging protocol</td>
				<td bgcolor="green"></td> <!--Status colour-->
				<td bgcolor="DarkGrey">D</td>
				<td bgcolor="DarkGrey">D</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Plan CAN node configuration</td>
				<td bgcolor="green"></td> <!--Status colour-->
				<td bgcolor="DarkGrey">D,B</td>
				<td bgcolor="DarkGrey">D,B</td>
				<td bgcolor="DarkGrey">D,B</td>
				<td bgcolor="DarkGrey">D,B</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Fully functioning CAN network (2+ CAN Nodes)</td>
				<td bgcolor="yellow"></td> <!--Status colour-->
				<td bgcolor="DarkGrey">D,B,O</td>
				<td bgcolor="DarkGrey">D,B,O</td>
				<td bgcolor="DarkGrey">D,B,O</td>
				<td bgcolor="DarkGrey">D,B,O</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Create a test plan, document results</td>
				<td bgcolor="green"></td> <!--Status colour-->
				<td bgcolor="DarkGrey">D,B,O</td>
				<td bgcolor="DarkGrey">D,B,O</td>
				<td bgcolor="DarkGrey">D,B,O</td>
				<td bgcolor="DarkGrey">D,B,O</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Web Development - Front End</td>
				<td bgcolor="yellow"></td> <!--Status colour-->
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
<!--Phase 2 (7 Weeks) -->
			<tr>
				<td>Web Development - Back End</td>
				<td bgcolor="yellow"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td>User interface for remote control</td>
				<td bgcolor="yellow"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">D</td>
				<td bgcolor="DarkGrey">D</td>
				<td bgcolor="DarkGrey">D</td>
				<td bgcolor="DarkGrey">D</td>
				<td bgcolor="DarkGrey">D</td>
				<td bgcolor="DarkGrey">D</td>
				<td bgcolor="DarkGrey">D</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Internet based remote access system (monitor & control)</td>
				<td bgcolor="red"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td bgcolor="DarkGrey">O,B</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td>Accessible (read/write) data repository</td>
				<td bgcolor="red"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
<!--Phase 3 (3 Weeks) -->
			<tr>
				<td>Connectivity between IDN and the Internet</td>
				<td bgcolor="red"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">D,B</td>
				<td bgcolor="DarkGrey">D,B</td>
				<td bgcolor="DarkGrey">D,B</td>
			</tr>
			
			<tr>
				<td>Fully functioning CAN diagnostic system</td>
				<td bgcolor="red"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
			</tr>
			
			<tr>
				<td>Oral Presentation</td>
				<td bgcolor="red"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
			</tr>
			
			<tr>
				<td>Final Project Report</td>
				<td bgcolor="yellow"></td> <!--Status colour-->
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
				<td bgcolor="DarkGrey">D,O,B</td>
			</tr>
		</table><br/>
		
		<img src="https://media1.tenor.com/images/d8d7b003cc98b44d2a4ca87e27f0c304/tenor.gif"/>
		<footer>&copy; Dylan Kite, Olivia Godwin, Blair Sharpe</footer>
	</body>
</html>


