<?php

	if(!session_start()) {
		header("Location: error.php");
			exit;
		}

	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
		
		if ($loggedIn) {
			header("Location: createpad.php");
			exit;
		}
	
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CreatePad</title>
        <link href="jslibs/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet">
        <script src="jslibs/jquery-1.11.2.min.js"></script>
        <script src="jslibs/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <link rel="stylesheet" type"text/css" href="cpstyle.css">
		<script src="cpscript.js"></script> 
	   	<script type="text/javascript" src="jslibs/jquery.videoBG-master/jquery.videoBG.js"></script>
	
    </head>
    <body>
        <div id="header">
            <h1 class="headerTitle" onclick="home()">CreatePad...</h1>

		   	<div id="loginWidget" class="ui-widget">

				<?php
					if ($error) {
						print "<div class=\"ui-state-error\">$error</div>\n";
					}
				?>

				<form action="login.php" method="POST">

					<input type="hidden" name="action"value="do_login">

					<label class="loginText" for="username">Username:</label>
					<input class="inputfield" type="text" id="username" name="username" placeholder="Username">

					<label class="loginText" for="password">Password:</label>
					<input class="inputfield" type="password" id="password" name="password">
					<input id="loginsubmit" type="submit" value="Submit">
				</form>
			</div>
        </div>

        <div id="padContainer">

            <div id="pads">
                <button class="pad" id="4" type="button">4</button>
                <button class="pad" id="5" type="button">5</button>
                <button class="pad" id="6" type="button">6</button>
                <button class="pad" id="7" type="button">7</button>
                <button class="pad" id="R" type="button">R</button>
                <button class="pad" id="T" type="button">T</button>
                <button class="pad" id="Y" type="button">Y</button>
                <button class="pad" id="U" type="button">U</button>
                <button class="pad" id="D" type="button">D</button>
                <button class="pad" id="F" type="button">F</button>
                <button class="pad" id="G" type="button">G</button>
                <button class="pad" id="H" type="button">H</button>
                <button class="pad" id="C" type="button">C</button>
                <button class="pad" id="V" type="button">V</button>
                <button class="pad" id="B" type="button">B</button>
                <button class="pad" id="N" type="button">N</button>
            </div>
		</div>

        <div id="soundBank">
            <ul id="navigation">				
				<li class="tab" id="snaresnologin">Snares</li>
				<li class="tab" id="hatsnologin">Hats</li>
				<li class="tab" id="kicksnologin">Kicks</li>
				<li class="tab" id="synthsnologin">Synths</li>
            </ul>
			<div id="content">
				<p>Click and drag a sound from the soundbox to a pad to assign it.</p>
				<p>Log in to CreatePad to get access to more sounds, including loops and percs, as well as customization features.</p>
			</div>
        </div>

		<footer>
			<p>Created By: Aren Wells</p>
		</footer>
       
    </body>
</html>
