// Get feedback element
// Declare variables

var elList, addLink, newEl, newText, counter, listItems, inputFeild;
elList = document.getElementById('list'); //Location for newly added list items
addLink = document.getElementById('addToList');//Bind element for event to add to list
counter = document.getElementById('counter');//Place to update items in list
inputFeild = document.getElementById('itemName');

function addItem(e){ //Declare function to process newly added item event
	e.preventDefault(); //Prevent link action when page is not ready
	
	var userInput = inputFeild.value;
	if (userInput.trim() === '') return;// does not add an empty item / value to the list
	
	newEl = document.createElement('div');
	newText = document.createTextNode(userInput); //Text to for new item div
	newEl.classList.add('alert');//Add the alert class to the newly created div
	newEl.classList.add('alert-info'); //Add additional class to the newly created div
	newEl.appendChild(newText); //Add text to div
	
	newEl.addEventListener('click', removeItem, false); // removes item from the list
	
	elList.appendChild(newEl);//Add fully configured div to shopping list	
	inputFeild.value = '';
}

addLink.addEventListener('click', addItem, false);//listen for click on button
elList.addEventListener('DOMNodeInserted', updateCount,false);//listen for dom to be updated
elList.addEventListener('DOMNodeRemoved', updateCount,false);

function removeItem(e){ //Declare function to process newly added item event
	e.preventDefault(); 
	var itemToRemove = e.target;
	elList.removeChild(itemToRemove);	
}

function updateCount(){//declare function to update counter
	listItems = elList.getElementsByTagName('div').length;//get total num of divs inside list
	counter.innerHTML=listItems;//update counter for all of the divs
}

// EXTRA CREDIT: make it so when an item is typed in it shows up on the list
//make it so when an item is clicked it deletes the list