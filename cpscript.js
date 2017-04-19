function home() {
	window.location = "createpad.php";
	return false;
}

			
$(function() {
	var x = 0;
	$(".tab").hover(function() {
		console.dir(this);
		if(this.className == "tab activeTab") {
			return;
		}
		else {
			$(this).addClass( "hoverTab" );
		}
	}, function() {
			$(this).removeClass( "hoverTab" );
		});
	});


$(function() {	
	$(".tab").click(function() {
		$("#content").html("Loading...");

		$(".tab").removeClass( "activeTab");
		$(this).addClass( "activeTab" );
					
		var content = $(this).attr('id');
		console.dir(content);

		var output = $();

		$.getJSON("tabs.php?content=" + content, function(data) {
			console.dir(data);
			$.each(data, function() {
				console.dir(this);
				var sound = $("<div class='" + this.class + " sound'></div>");

				sound.html(this.name + "<audio id='" + this.name + "' src='" + this.audio + "' type='" + this.type + "'></audio>");
				console.dir(sound);
				output = output.add(sound);
			});

			$("#content").html(output);

			$(".sound").draggable({ 
				cursor: "grabbing", 
				scroll: true,
				helper: "clone",
			});

			$(".sound").click(function(){ 	
				var id;
				console.dir(this);
				id = $(this).children().first();
				console.dir(id);
				id.get(0).pause();							
				id.get(0).currentTime = 0;
				id.get(0).play();
			});

		});
	});
});

$(function() {
	$(".pad").droppable({
		hoverClass: "padhover",
		drop: function(event, ui) {
			console.dir(event);
			var destpad = event.target;
			console.dir(destpad);
			console.dir(ui);
			var sound = ui.draggable;

			var audio = sound.children().first().prop("src");
			console.dir(audio);

			if(destpad.firstElementChild == null) {
				$(destpad).append('<audio src="' + audio + '"></audio>');
			}
			else {
				$(destpad.firstElementChild).replaceWith('<audio src="' + audio + '"></audio>');
			}
		}
	});
});

$(function() {
	var input = 0;
	$(document).keydown(function(event){
		if(event.currentTarget.activeElement.className == "inputfield") {
			input = 1;
			return;
		}
		var key = String.fromCharCode(event.keyCode);
		console.dir(key);
		var pad = $("#" + key);
		$(pad).addClass( "padPress" );
		var audio = $(pad).children().first();

		if(audio.length != 0) {
			audio.get(0).pause();
			audio.get(0).currentTime = 0;
			audio.get(0).play();
		}
	});

	$(document).keyup(function(event){
		if(input == 1) {
			input = 0;
			return;
		}
		var key = String.fromCharCode(event.keyCode);
		var pad = $("#" + key);
		console.dir(pad);
		$(pad).removeClass( "padPress" );	
	});

});
