// shopping.js
// This script calculates an order total.

// Function called when the form is submitted.
// Function performs the calculation and returns false.
function calculate() {
	'use strict';

	// Get references to the form values:
	var quantity = parseInt(document.getElementById('quantity').value);
	var price = parseFloat(document.getElementById('price').value);
	var tax = parseFloat(document.getElementById('tax').value);
	var discount = parseFloat(document.getElementById('discount').value);
	// add shipping filed
	var shipping = parseFloat(document.getElementById('shipping').value);

	// Add validation here later!

	// Calculate the initial total:

	// For storing the order total:
	var total = quantity * price;
	console.log('total before tax: ' + total);

	// Make the tax rate easier to use:
	tax = tax / 100;
	tax = tax + 1;

	// Factor in the tax:
	total = total * tax;
	console.log('total after tax: ' + total);

	//modify the JS code to double the discount
	// applied when the quantity ordered is greater
	// than 100 items
	if (quantity > 100) {
		discount = 2 * discount;
		total = total - discount;
	}
	else {
		total = total - discount;
	}
	// Factor in the discount:
	console.log('total after discount: ' + total);

	total = total + shipping;
	// Factor in the shipping;
	console.log('total after shipping:' + total);

	// Format the total to two decimal places:
	total = total.toFixed(2);

	// Display the total:
	document.getElementById('total').value = total;

	// Return false to prevent submission:
	return false;

} // End of calculate() function.

// Function called when the window has been loaded.
// Function needs to add an event listener to the form.
function init() {
	'use strict';

	// Add an event listener to the form:
	var theForm = document.getElementById('theForm');
	theForm.onsubmit = calculate;

} // End of init() function.

// Assign an event listener to the window's load event:
window.onload = init;