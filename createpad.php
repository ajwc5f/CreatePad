<?php

	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
			exit;
		}
	
	
	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
		
		if (!$loggedIn) {
			header("Location: createpadlogin.php");
			exit;
		}
	
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CreatePad</title>
        <link href="jslibs/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
        <script src="jslibs/jquery-1.11.2.min.js"></script>
        <script src="jslibs/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <link rel="stylesheet" type"text/css" href="cpstyle.css">
		<script src="cpscript.js"></script>

		<script>
			$(function() {
				var background = $("#padContainer");
				var boxBackground = $("ul#navigation");
				$( "#bgpicker" ).selectmenu({
					change: function( event, data ) {
						background.css( "background", data.item.value);
						background.css( "background-size", "cover");
						background.css( "background-position", "center");
						boxBackground.css( "background" , data.item.value);
						boxBackground.css( "background-position", "center");
						$(this).css("padding" , "0px");
					}
				});
			});
		</script>


    </head>
    <body>
        <div id="header">
            <h1 class="headerTitle" onclick="home()">CreatePad...</h1>

		   	<div id="logoutWidget" class="ui-widget">
				<form action="logout.php">
					<input id="logout" type="Submit" value="Logout">
				</form>

			</div>

			<div id="selectmenu">
				<form id="themeChange">
				<label for="bgpicker">change background...</label>
				<select name="bgpicker" id="bgpicker">
					<option value="url(images/optica_pattern.png)">optica</option>
					<option value="url(images/geometry.jpg)">geometric</option>
					<option value="url(images/range.jpg)">mountians</option>
					<option value="url(images/rise.jpg)">sunrise</option>	
				</select>
				</form>
			</div>
        </div>
        <div id="padContainer">
			<div id="light">
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
        </div>
        <div id="soundBank">
            <ul id="navigation">				
				<li class="tab" id="snares">Snares</li>
				<li class="tab" id="hats">Hats</li>
				<li class="tab" id="kicks">Kicks</li>
				<li class="tab" id="percs">Percs</li>
				<li class="tab" id="synths">Synths</li>
			</ul>
			<div id="content">
				<p>Click and drag a sound from the soundbox to a pad to assign it.</p>
			</div>
        </div>

		<footer>
			<p>Created By: Aren Wells</p>
		</footer>
       
    </body>
</html>
