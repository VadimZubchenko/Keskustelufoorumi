// Get the container element
var btnContainer = document.getElementById("jaska");

// Get all buttons with class="nav-item" inside the container
var btns = btnContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}

var active_group = "1";

function sendMes(username) {

	var messagebox = document.getElementById("text");
	var message = messagebox.value;
	var message = message.replace(/[#_{}/\|<>]/g,' ');
	var message = message.replace(/(\r\n|\n|\r)/gm, "<br>");

	//Tähän current time
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth();
	var year = date.getFullYear();
	var time = date.getTime();
	var timestamp = time + " " + day + "." + month + "." + year;

	//Luo tekstiboxi
	document.getElementById("messages2").appendChild(createMessagebox(username, message, timestamp));
	insertMessage(username, message, active_group);

	//Tyhjennä messagebox
	messagebox.value = "";

	var element = document.getElementById("messages2");
	element.scrollTop = element.scrollHeight - element.clientHeight;
}

//Luo ja palauta viestilaatikko elementti
function createMessagebox(username, message, timestamp) {
	var mydiv = document.createElement('div');
	mydiv.className = "container";
	var e1 = document.createElement('h6');
	e1.innerHTML = username;
	var e2 = document.createElement('small');
	e2.innerHTML = message;
	var e3 = document.createElement('small');
	e3.innerHTML = " <i>[" + timestamp + "]</i>";
	e3.className = "time-right";

	mydiv.appendChild(e1);
	mydiv.appendChild(e2);
	mydiv.appendChild(e3);

	return mydiv;
}

//Tallenna viesti tietokantaan
function insertMessage(username, message, group_id){
	var ajaxRequest;  // The variable that makes Ajax possible!

	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	ajaxRequest.onreadystatechange = function() {
		if (ajaxRequest.readyState == 4) {
			//var bret = ajaxRequest.responseText;
			//document.getElementById("text").value = bret;
		}
	}

	var sql = "INSERT INTO messages (message, group_id, sender_username) VALUES('" + message + "', '" + group_id + "', '" + username + "')";

	ajaxRequest.open("GET", "php/insert.php?q=" + sql, true);
	ajaxRequest.send(null);
}

//Poista viestit ruudulta
function clearMessages() {
	var element = document.getElementById("messages2");
	while (element.firstChild) {
		element.removeChild(element.firstChild);
	}
}

//Hae KAIKKI valitun groupin viestit ja aseta ne viestialueelle
function selectMessage(group_id){
	clearMessages();

	active_group = group_id;

	var ajaxRequest;  // The variable that makes Ajax possible!

	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var myObject = JSON.parse(ajaxRequest.responseText);

			for (var i = 0; i < myObject.length; i++) {
				//Rakenna message
				var username = myObject[i]['sender_username'];
				var message = myObject[i]['message'];
				var timestamp = formatTimestamp(myObject[i]['timestamp']);

				document.getElementById("messages2").appendChild(createMessagebox(username, message, timestamp));
			}
		}
	};

	var sql = "SELECT * FROM messages WHERE group_id = " + group_id;

	ajaxRequest.open("GET", "php/select.php?q=" + sql, true);
	ajaxRequest.send(null);
}

function formatTimestamp(timestamp) {
	var ONE_DAY = 24 * 60 * 60 * 1000;

	var date = new Date(timestamp);
	var day = date.getDate();
	var month = date.getMonth();
	var year = date.getFullYear();
	var hour = date.getHours();
	var minutes = date.getMinutes();

	if (hour < 10) {hour = "0" + hour}
	if (minutes < 10) {minutes = "0" + minutes}

	//Check if timestamp is today
	if ((new Date().getTime() - date.getTime()) < ONE_DAY) {
		return hour + ":" + minutes + " today";
	} else {
		return hour + ":" + minutes + " " + day + "." + month + "." + year;
	}
}