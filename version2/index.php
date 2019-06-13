<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Magali MARTIN - CV</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Magali <span>MARTIN</span></h1>
			<h4>Développeur Web</h4>
			<h4>Full Stack</h4>
		</div>
		<div id="menu">
			<ul>
				<li><a href="#">Download CV</a></li>
				<li><a id="buttonAdmin" href="#" onclick="openModalForm()">Admin</a></li>
			</ul>
		</div>
		<div id="content-landscape">
			<div class="tab">
				<button class="tablinks" onclick="openTab(event, 'about')" id="defaultOpen">About Me</button>
				<button class="tablinks" onclick="openTab(event, 'skills')">Skills</button>
				<button class="tablinks" onclick="openTab(event, 'educations')">Educations</button>
				<button class="tablinks" onclick="openTab(event, 'works')">Works</button>
				<button class="tablinks" onclick="openTab(event, 'languages')">Languages</button>
				<button class="tablinks" onclick="openTab(event, 'more')">More</button>
				<button class="tablinks" onclick="openTab(event, 'contact')">Contact</button>
			</div>

			<div id="about" class="tabcontent">
				<h3>About Me</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>

			<div id="skills" class="tabcontent">
				<h3>Skills</h3>
				<p>Here will display all skills...</p> 
			</div>

			<div id="educations" class="tabcontent">
				<h3>Educations</h3>
				<p>Here will display all educations...</p>
			</div>

			<div id="works" class="tabcontent">
				<h3>Works</h3>
				<p>Here will display all work experiences...</p>
			</div>

			<div id="languages" class="tabcontent">
				<h3>Languages</h3>
				<p>Here will display all languages speaking...</p>
			</div>

			<div id="more" class="tabcontent">
				<h3>More</h3>
				<p>Here will display all more things pertinent...</p>
			</div>

			<div id="contact" class="tabcontent">
				<h3>Contact</h3>
				<p>Here will display contact info...</p>
			</div>
		</div>

		<div id="content-portrait">
			<button class="panellinks" onclick="openPanel()">About Me</button>
			<div id="about" class="panelcontent">
				<h3>About Me</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>

			<button class="panellinks" onclick="openPanel()">Skills</button>
			<div id="skills" class="panelcontent">
				<h3>Skills</h3>
				<p>Here will display all skills...</p> 
			</div>

			<button class="panellinks" onclick="openPanel()">Educations</button>
			<div id="educations" class="panelcontent">
				<h3>Educations</h3>
				<p>Here will display all educations...</p>
			</div>

			<button class="panellinks" onclick="openPanel()">Works</button>
			<div id="works" class="panelcontent">
				<h3>Works</h3>
				<p>Here will display all work experiences...</p>
			</div>

			<button class="panellinks" onclick="openPanel()">Languages</button>
			<div id="languages" class="panelcontent">
				<h3>Languages</h3>
				<p>Here will display all languages speaking...</p>
			</div>

			<button class="panellinks" onclick="openPanel()">More</button>
			<div id="more" class="panelcontent">
				<h3>More</h3>
				<p>Here will display all more things pertinent...</p>
			</div>

			<button class="panellinks" onclick="openPanel()">Contact</button>
			<div id="contact" class="panelcontent">
				<h3>Contact</h3>
				<p>Here will display contact info...</p>
			</div>
		</div>

		<div id="footer">
			<div id="menu-footer">
				<ul>
					<li><a href="">Download CV</a></li>
					<li><a href="">admin</a></li>
				</ul>
			</div>
			<div id="copyright">
				<p><?php echo(date("Y")); ?>@copyright</p>
			</div>
		</div>
	</div>
	
	<div id="modalForm" class="modal">

		<form class="modal-content animate" action="">
			<div class="closebtn-container">
				<span onclick="document.getElementById('modalForm').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>

			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<button type="submit">Login</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('modalForm').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>