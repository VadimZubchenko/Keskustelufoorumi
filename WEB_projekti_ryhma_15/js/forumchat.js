function sendMes() {
	var username = "Hannu";
	var message = document.getElementById("text").value;
	var message = message.replace(/[#_{}/\|<>]/g,' ');
	var message = message.replace(/(\r\n|\n|\r)/gm, "<br>");

	//Tähän current time
	var timestamp = "14:00";

	//Tähän aktiivisen keskustelun hakeminen
	var group_id = "1";

	document.getElementById("messages2").appendChild(createMessagebox(username, message, timestamp));
	insertMessage(username, message, group_id);
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
	e3.innerHTML = timestamp;
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

				//Do something
				//Rakenna message
				var username = myObject[i]['sender_username'];
				var message = myObject[i]['message'];
				var timestamp = myObject[i]['timestamp'];

				document.getElementById("messages2").appendChild(createMessagebox(username, message, timestamp));
			}
		}
	}

	var sql = "SELECT * FROM messages WHERE group_id = " + group_id;

	ajaxRequest.open("GET", "php/select.php?q=" + sql, true);
	ajaxRequest.send(null);
}
