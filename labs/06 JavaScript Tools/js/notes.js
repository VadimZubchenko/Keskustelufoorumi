'use strict';

loadList();

var notes = [];

function addItem() {
	var n = 1;
	var textbox = document.getElementById('item');
	var itemText = textbox.value;
	textbox.value = '';
	textbox.focus();
	var count;
	if (notes.length > 0) {
		for (var i = 0; i<notes.length; i++) {
			// tarkista array ja kun loytaa samannimisen sitten muuttaa sen quantity,
			// Huom! ei pushaa mitaa listaa. Loydettaessa operaatio breakataan
			if(itemText == notes[i].title) {
				notes[i].quantity = notes[i].quantity + 1;

				break;
			}
			// (i == notes.length - 1), eli i=rivinmaara - 1, niin loop ei paase
			// tanne ennen kun for() tarkistaa kaikki tuotteet array-ssa
			// ja ei loyda mitaan
			else if (i == notes.length - 1){
				var newItem = {title: itemText, quantity: 1};
				notes.push(newItem);

				break;
			}

		}

	} else {
		// tama vain kaytetaan kerran alussa, kun ei ole yhtaa arrayssa
		var newItem = {title: itemText, quantity: 1};
		notes.push(newItem);



	}
	saveList();
	displayList();
}
function displayList() {
	var table = document.getElementById('list');

	table.innerHTML = '';
	for (var i = 0; i<notes.length; i++) {
		var node = undefined;
		var note = notes[i];
		var node = document.createElement('tr');
		var html = '<td>'+note.title+'</td><td>'+note.quantity+'</td><td><a href="#" onClick="deleteIndex('+i+')">delete</td>';
		node.innerHTML = html;
		table.appendChild(node);
	}


}

function deleteIndex(i) {
	notes.splice(i, 1);
	displayList();
}

var button;
button = document.getElementById('add');
button.onclick = addItem;

// Local Storage luominen
function saveList() {
	localStorage.notes = JSON.stringify(notes);
}

function loadList() {
	console.log('loadList');
	if (localStorage.notes) {
		notes = JSON.parse(localStorage.notes);
		displayList();
	}
}