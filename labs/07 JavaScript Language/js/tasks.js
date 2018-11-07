// tasks.js
// This script manages a to-do list.

// Need a global variable:
var tasks = []; 

// Function called when the form is submitted.
// Function adds a task to the global array.
function addTask() {
	'use strict';

	// Get the task:
	var task = document.getElementById('task');
	var itemText = task.value;
	task.value = '';
	task.focus();

	// Reference to where the output goes:
	var output = document.getElementById('output');
    
	// For the output:
	var message = '';



	if (itemText) {
    
		// Add the item to the array:
		tasks.push(itemText);
        
		// Update the page:
		message = '<h2>To-Do</h2><ol>';
		for (var i = 0, count = tasks.length; i < count; i++) {
			message += '<li>' + tasks[i] + '</li>';
		}
		message += '</ol>';
		output.innerHTML = message;
        
	} // End of task.value IF.

	// Return false to prevent submission:
	return false;
    
} // End of addTask() function.

function removeDublicates() {

	// Reference to where the output goes:
	var output = document.getElementById('output');

	// luodaan uuden array
	var unique_array = [];

	for (var i = 0, count = tasks.length; i < count; i++) {
		// arr.indexof method lisaa unique_array listaan vain ne elementit,
		// jotka ei viela (== -1) loydy. Jos se lyotaa, == 1, niin ei
		// lisaa sen listaan
		if(unique_array.indexOf(tasks[i]) == -1){
			unique_array.push(tasks[i]);
		}
	}
	// Update the page:
	message = '<h2>To-Do</h2><ol>';
	for (var i = 0, count = unique_array.length; i < count; i++) {
		message += '<li>' + unique_array[i] + '</li>';
	}
	message += '</ol>';
	output.innerHTML = message;

}
// Initial setup:
function init() {
	'use strict';
	document.getElementById('theForm').onsubmit = addTask;
	document.getElementById('theRemove').onclick = removeDublicates;
} // End of init() function.
window.onload = init;