//console.log('page loaded');

console.log(document);
// "anonymous function" that calls the specified function
document.querySelector('#userForm').onkeyup= function () {
	console.log('save');
	// get a DOM object representing a form field.
	var name = document.querySelector('#userForm input[type="text"]');
	console.log(name);
	document.querySelector('#summary h1').innerHTML = name.value;

	var paragraphs = document.querySelectorAll('#summary p');
	console.log('found '+paragraphs.length+' p tags');

	console.log('updating email');
	var email = document.querySelector('#userForm input[type="email"]');
	paragraphs[0].innerHTML = email.value;

	console.log('data');
	var data = document.querySelector('#userForm input[type="password"]');
	paragraphs[1].innerHTML = data.value;

};
// Original 'email' with onkeydown listener
/*
document.querySelector('#userForm input[type="email"]').onkeydown = function() {
	console.log('updating email');
	var email = document.querySelector('#userForm input[type="email"]').value;
	document.querySelector('#summary p').innerHTML = email;
};

// original code of 'save' function

function save() {
	console.log('save');
	// get a DOM object representing a form field.
	var name = document.querySelector('#userForm input[type="text"]');
	console.log(name);
	document.querySelector('#summary h1').innerHTML = name.value;
	var data = document.querySelector('#userForm input[type="password"]');
	console.log(data);
	var paragraphs = document.querySelectorAll('#summary p');
	console.log('found '+paragraphs.length+' p tags');
	paragraphs[1].innerHTML = data.value;
}
*/