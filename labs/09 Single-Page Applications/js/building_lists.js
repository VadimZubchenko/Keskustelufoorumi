
var request = new XMLHttpRequest();
request.open('GET', 'data/books.json', false);
request.send(null);
var data = JSON.parse(request.responseText);
console.log(data);

var books = data.books;

var table = document.createElement('TABLE');

for (var i=0; i < books.length; i++) {
	console.log(books[i].title, books[i].year);
	var head = document.createElement('TH');
	head.innerHTML = 'Book: ' + [i+1];
	var item = document.createElement('TD');
	item.innerHTML = books[i].title + ', year: ' + books[i].year;
	head.appendChild(item);
	table.appendChild(head);


}
// create and add element 'H2' into HTML to the TOP
var title = document.createElement('H2');
document.body.appendChild(title);

// add the table into HTML after title
document.body.appendChild(table);

// recall element 'th' from html
var th = document.getElementsByTagName('th');
// add an event handler into 'th[0]' element, so when you click on a row, the book title is displayed
th[0].addEventListener('click', function(){
	title.innerHTML = 'Title: ' + books['0'].title;

});

th[1].addEventListener('click', function(){
	title.innerHTML = 'Title: ' + books['1'].title;

});

th[2].addEventListener('click', function(){
	title.innerHTML = 'Title: ' + books['2'].title;

});

th[3].addEventListener('click', function(){
	title.innerHTML = 'Title: ' + books['3'].title;

});

th[4].addEventListener('click', function(){
	title.innerHTML = 'Title: ' + books['4'].title;

});



